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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = "INSERT INTO authors(name,email) VALUES ('".$name."','".$email."');";

    $status = $conn->query($query);
    var_dump($status);
    if($status == true)
    {
        setcookie('msg', 'Thêm mới thành công', time() + 5);
        header('Location: authors_list.php');
    }
    else
    {
        setcookie('msg', 'Thêm mới không thành công', time() + 5);
        header('Location: authors_add.php');
    }
?>