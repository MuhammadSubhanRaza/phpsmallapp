
<?php

$server = "localhost";
$userName = "root";
$password = "admin123";
$databaseName = "smallappdb";

$id = $_POST["txtId"];
$name = $_POST["txtFullName"];
$qulaification = $_POST["txtQualification"];
$email = $_POST["txtEmail"];
$reference = $_POST["txtReference"];
$description = $_POST["txtDescription"];


$conn = mysqli_connect($server,$userName,$password,$databaseName);

if($conn->connect_error)
{
    die("Some error occured");
}

$sql = "INSERT into registration(regID,regName,regEmail,regQualification,regREference,regDescription) VALUES ($id,'$name','$email','$qulaification','$reference','$description')";

mysqli_query($conn,$sql)

?>

