<?php
session_start();
require_once('../../connection.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
//Lấy dữ liệu người dùng email, pass
$email = $_POST['email']; 
$password = $_POST['password']; 

//Kiểm tra xem có lấy được email không 
//echo $email."<br>";
//echo $password."<br>";
$query = "SELECT a.name_customer, a.id
         FROM infomation_customer a
         WHERE a.email = '".$email."' 
              AND a.password = '".$password."' 
              AND a.status = '1'";

//Thực thi câu lệnh
$customer = $conn->query($query)->fetch_assoc();

if($customer !== NULL)
{
    $_SESSION['isLogin_customer'] = true;
    $_SESSION['customer'] = $customer;
    header("Location: ../../index.php");
}
else
{
    setcookie('msg', 'Đăng nhập thất bại', time() + 3);
    header("Location: login_customer.php");
}
?>