<?php
    require_once('../../connection.php');
    $name_customer = $_POST['name_customer'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO infomation_customer(name_customer,email,password)
              VALUES ('$name_customer', '$email','$password');";

    $status = $conn->query($query);
    var_dump($status);
    // echo "<pre>";
    // print_r($status);
    // echo "</pre>";

    if($author !== NULL)
    {
        $_SESSION['isLogin'] = true;
        $_SESSION['author'] = $author;
        setcookie('msg', 'Đăng ký thành công', time() + 5);
        
        header("Location: customer_add.php");
    }
    else
    {
       // setcookie('msg', 'Đăng nhập thất bại', time() + 3);
       setcookie('msg', 'Đăng ký thành công', time() + 5);
        header("Location: customer_add.php");
    }
?>