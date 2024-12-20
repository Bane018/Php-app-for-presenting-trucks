<?php
require_once ("../connect.php");
$image_url = $_FILES['image_url']['name'];
$truck_name = $_POST['truck_name'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$mileage = $_POST['mileage'];
$engine = $_POST['engine'];
$trans = $_POST['trans'];
$note = $_POST['note'];

$img_ex = pathinfo($image_url, PATHINFO_EXTENSION);
$tmp_name = $_FILES['image_url']['tmp_name'];
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
if (in_array($img_ex_lc, $allowed_exs)) {
    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
    $img_upload_path = '../images/' . $new_img_name;
    move_uploaded_file($tmp_name, $img_upload_path);
}

$sql = $con->prepare("INSERT INTO truck_info(image_url, truck_name, stock, price, mileage, engine, trans, note) VALUES (:image_url, :truck_name, :stock, :price, :mileage, :engine, :trans, :note)");
$sql->bindParam("image_url", $new_img_name);
$sql->bindParam("truck_name", $truck_name);
$sql->bindParam("stock", $stock);
$sql->bindParam("price", $price);
$sql->bindParam("mileage", $mileage);
$sql->bindParam("engine", $engine);
$sql->bindParam("trans", $trans);
$sql->bindParam("note", $note);
$date = $sql->execute();

if ($date) {
    header("Location: truck_add.php");
}