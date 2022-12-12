<?php
include("connect.php");

//$email = $_GET["email"];
$sql = "select * from register ";
$query = mysqli_query($conn, $sql);
$data = array();
while ($row = mysqli_fetch_array($query)) {
    // header('Location: /myprojects/Demo/JAVASCRIPT/login.php');
    $data[] = $row;
}
echo json_encode($data);
?>