<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
        $config = include $_SERVER["DOCUMENT_ROOT"] . "/config/config.php";
    ?>

    <script src="<?php echo $config['fontawesome_kit_url']; ?>" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/public/css/common.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <?php include 'src/views/header.php'; ?>

    <div>

        <h1>C</h1>

        <form id="Create">

            <label for="Title">Title : </label>
            <input type="text" id="Title" name="Title" required>
            
            <label for="Content">Content : </label>
            <input type="text" id="Content" name="Content" required>

            <button type="submit">Create</button>

        </form>
        
        <h1 id="Lists">R</h1>

        <form id="Read">

            <button type="submit">read</button>

        </form>

    </div>

    <script src="public/js/script.js"></script>
</body>
</html>