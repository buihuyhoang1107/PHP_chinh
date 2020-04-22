<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//echo    $_SESSION['isLogin']; 
if(!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true){
    header("Location: login.php");
}
   
require_once('../../connection.php');
$id = $_GET['id'];

$query = "DELETE FROM categories WHERE id = ".$id;

$status = $conn->query($query);
var_dump($status);
if($status == true)
{
    setcookie('msg', 'Xóa thành công', time() + 5);
   
}
else
{
    setcookie('msg', 'Xóa không thành công', time() + 5);
}
header('Location: category_list.php');
?>