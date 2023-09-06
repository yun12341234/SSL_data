<?php
//เชื่อมต่อฐานข้อมูล
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "ssl_db";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if(!$conn){
    die("Connection failed; " . mysqli_connect_error());
}
//echo "Connected successfully";


//รับค่าที่ส่งมาจากฟอร์ม
$effective_sales= $_POST["effective_sales"]; 
$effective_order= $_POST["effective_order"];
$all_orders= $_POST["all_orders"];
$quantity= $_POST["quantity"];
$total_sales= $_POST["total_sales"];
$refund= $_POST["refund"];
$refunded_orders= $_POST["refunded_orders"];
$refund_customer= $_POST["refund_customer"];
$rebate_rate= $_POST["rebate_rate"];
$canceled_order_amount= $_POST["canceled_order_amount"];
$canceled_order= $_POST["canceled_order"];
$average_sales_order= $_POST["average_sales_order"];
$discount_code= $_POST["discount_code"];
$date= date('Y-m-d', strtotime($_POST["birthday"]));



if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
  $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
  $image_upload_path = "photo/".$new_image_name;
  move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$image_upload_path);

}else{
  $new_image_name = "";
}


    $sql = "INSERT INTO 
    orders(effective_sales,effective_order,all_orders,quantity,total_sales,refund,refunded_orders,refund_customer,rebate_rate,canceled_order_amount,canceled_order,average_sales_order,discount_code,date) 
    VALUES('$effective_sales','$effective_order','$all_orders','$quantity','$total_sales','$refund','$refunded_orders','$refund_customer','$rebate_rate','$canceled_order_amount','$canceled_order','$average_sales_order','$discount_code','$date')";
    $result=mysqli_query($conn,$sql);

    if ($result) {
      header("location:showdataN.php");
    }else {
      echo mysqli_error($conn);
    } 




 
 
  


//ตรวจสอบการทำงานของคำสั่ง Insert

?>