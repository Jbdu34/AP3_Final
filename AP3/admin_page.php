<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Page Admin</title>
    <link rel="stylesheet" href="admin.css" />
</head>

<body>
    <div class="wrapper">
        <div class="img-area">
            <div class="inner-area">
                <img src="img_profil/admin.png" alt="">
            </div>
        </div>
        <div class="name">Admin</div>
        <?php
            require_once('listAdherent.php');
        ?>
    </div>
</body>

</html>