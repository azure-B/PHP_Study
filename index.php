<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $config = include $_SERVER["DOCUMENT_ROOT"] . "/config/config.php";
    ?>
    <script src="<?php echo $config['fontawesome_kit_url']; ?>" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/index.css">
    <title>Project</title>   
</head>

<!-- "This page is the default page of our project. It features a basic login/logout setup." -->

<body>
    <header>
        <div>
            <img src="" alt="">this is Logo side</img>
        </div>
        <div>
            <i class="fa-solid fa-bars"></i>        
        </div>
    </header>
    <main>
        <div class="flex_center logo_group">
            content
            <?php
            echo 2*2
            ?>
        </div>
        
        <div class="flex_center sign_in_group">
            content
        </div>

        <div class="flex_center sign_up_group">
            content
        </div>
    </main>
</body>
</html>