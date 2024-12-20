<?php
require_once ("../connect.php");
$sql = "DELETE FROM truck_info WHERE truck_id = :truck_id";

$stmt = $con->prepare($sql);

$stmt->bindParam(':truck_id', $_REQUEST['id']);

$stmt->execute();

header("Location: truck_list.php");
exit();
