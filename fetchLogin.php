<?php
include("connect.php");

$email = $_POST["email"];
$pass = $_POST["password"];
$sql = "select * from register where email='$email' and password='$pass'";
$query = mysqli_query($conn, $sql);
$data = array();
while ($row = mysqli_fetch_array($query)) {
    // header('Location: /myprojects/Demo/JAVASCRIPT/login.php');
    $data[] = $row;
}
echo json_encode($data);
?>