<?php
require('dbconnect.php');

$id=$_GET["idemp"];
$sql="UPDATE FROM employees WHERE empid =$id";

$result=mysqli_query($conn,$sql); // รันคำสั่งที่ถูกเก็บไว้ในตัวแปร sql
if($result){
    header("location:insertfromN.php");
}
?>