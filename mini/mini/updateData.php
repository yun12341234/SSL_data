<?php
require('dbconnect.php');
$id=$_POST["id"];
$price=$_POST["price"];
$quantity= $_POST["quantity"];
$location= $_POST["location"];
$date= date('Y-m-d', strtotime($_POST["birthday"]));


if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
    $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./photo/".$new_image_name;
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$image_upload_path);

}else{
    $new_image_name = "";
}


$sql ="UPDATE employees SET 
price = '$price' , 
quantity = '$quantity' ,
location = '$location',
date = '$date',
image = '$new_image_name' WHERE empid = '$id'";



$result=mysqli_query($conn,$sql); 
if($result){
header("location:showdataN.php");
}else {
    echo mysqli_error($conn);
} 
?>