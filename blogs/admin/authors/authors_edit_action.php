<?php

    require_once('../../connection.php');
    $name = $_POST['name'];
    $query = "INSERT INTO authors(name) VALUES ('".$name."');";

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