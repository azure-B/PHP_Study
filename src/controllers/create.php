<?php

include '../../config/dbcon.php';

if (isset($_POST['Title']) && isset($_POST['Content'])) {
    $Title = $_POST['Title'];
    $Content = $_POST['Content'];

    $sql = $mysqli->prepare("INSERT INTO CRUD (Title, Content) VALUES (?, ?)");
    $sql->bind_param('ss', $Title, $Content);

    if ($sql->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}

?>
