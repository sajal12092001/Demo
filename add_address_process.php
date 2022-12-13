<?php
include('connect.php');
session_start();
$id = $_SESSION["id"];

$addline1 = $_POST["getaddline1"];
$addline2 = $_POST["getaddline2"];
$city = $_POST["getcity"];
$state = $_POST["getstate"];
$country = $_POST["getcountry"];
$zipcode = $_POST["getzipcode"];
$phonenumber = $_POST["getphonenumber"];

$sql="insert into address values('null','$id','$addline1','$addline2','$city','$state','$country','$zipcode','$phonenumber')";
$query = mysqli_query($conn, $sql);
if (!$query)
    echo "error", mysqli_error($conn);
else {
    header("Location: dashboard.php");
}
?>