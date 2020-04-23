<?php
    require_once('../../connection.php');
    $email_customer = $_POST['newsletter'];
    $promotion = 'Be the first to know about new products, offers and promos. Plus,
    get 20% off!';
    $query = "INSERT INTO notification_customer(email_customer,promotion)
             VALUES ('".$email_customer."', '".$promotion."');";

    $status = $conn->query($query);
    // var_dump($status);
    
    // echo "<pre>";
    //     print_r($email_customer);
       
    //     print_r($promotion);
    // echo "</pre>";
    if($status == true)
    {
        // setcookie('msg', 'Thêm mới thành công', time() + 5);
       header('Location: ../../index.php');
    }
    else
    {
        setcookie('msg', 'Thêm mới không thành công', time() + 5);
        header('Location: index.php');
    }
?>