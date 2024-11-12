<?php

include '../../config/dbcon.php';

$Result = $mysqli -> query("SELECT * FROM CRUD  ");
$Data = $Result->fetch_all(MYSQLI_ASSOC);

echo json_encode(['Data' => $Data]);

?>
