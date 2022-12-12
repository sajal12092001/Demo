<?php
include("connect.php");
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$dob = $_POST["dob"];
$bio = $_POST["bio"];


$sql = "insert into register values('null','$firstname','$lastname','$email','$mobile','$password','$gender','$age','$dob','$bio')";
$query = mysqli_query($conn, $sql);
if ($query) {
    // header('Location: /myprojects/Demo/JAVASCRIPT/login.php');
    echo "data inserted";
} else {
    echo "error";

}








?>