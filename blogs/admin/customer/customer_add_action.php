<?php
    require_once('../../connection.php');
    $email_customer = $_POST['newsletter'];
    $promotion = 'Be the first to know about new products, offers and promos. Plus,
    get 20% off!';
    $query = "INSERT INTO notification_customer(email_customer,promotion) VALUES ('".$email_customer."', '".$promotion."');";

    $status = $conn->query($query);
    var_dump($status);
    if($status == true)
    {
        setcookie('msg', 'Thêm mới thành công', time() + 5);
        header('Location: category_list.php');
    }
    else
    {
        setcookie('msg', 'Thêm mới không thành công', time() + 5);
        header('Location: category_add.php');
    }
?>