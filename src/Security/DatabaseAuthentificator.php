<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class DatabaseAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private Connection $connection;

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        Connection $connection
    ) {
        $this->connection = $connection;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');
        $csrfToken = $request->request->get('_csrf_token');

        // Vérifier d'abord dans la table admin
        $sqlAdmin = "SELECT * FROM administrateur WHERE email = :email AND mot_de_passe = :password";
        $stmtAdmin = $this->connection->prepare($sqlAdmin);
        $resultAdmin = $stmtAdmin->executeQuery([
            'email' => $email,
            'password' => $password
        ]);

        $admin = $resultAdmin->fetchAssociative();

        if ($admin) {
            // C'est un administrateur
            $userObject = new User();
            $userObject->setEmail($admin['email']);
            $userObject->setRoles(['ROLE_ADMIN']);
            if (isset($admin['nom'])) $userObject->setLastName($admin['nom']);
            if (isset($admin['prenom'])) $userObject->setFirstName($admin['prenom']);
        } else {
            // Vérifier dans la table adherent
            $sqlAdherent = "SELECT * FROM adherent WHERE email = :email AND mot_de_passe = :password";
            $stmtAdherent = $this->connection->prepare($sqlAdherent);
            $resultAdherent = $stmtAdherent->executeQuery([
                'email' => $email,
                'password' => $password
            ]);

            $adherent = $resultAdherent->fetchAssociative();

            if ($adherent) {
                // C'est un adhérent
                $userObject = new User();
                $userObject->setEmail($adherent['email']);
                $userObject->setRoles(['ROLE_USER']);
                if (isset($adherent['nom'])) $userObject->setLastName($adherent['nom']);
                if (isset($adherent['prenom'])) $userObject->setFirstName($adherent['prenom']);
            } else {
                throw new CustomUserMessageAuthenticationException('Email ou mot de passe invalide.');
            }
        }

        return new Passport(
            new UserBadge($email, function() use ($userObject) {
                return $userObject;
            }),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $csrfToken),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // Redirection selon le rôle
        $user = $token->getUser();
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return new RedirectResponse($this->urlGenerator->generate('app_admin_dashboard'));
        }

        return new RedirectResponse($this->urlGenerator->generate('app_user_profile'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
} 