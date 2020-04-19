<?php

    require_once('../../connection.php');
    $title = $_POST['title'];
    $description = $_POST['description'];
    $contents = $_POST['contents'];
    $thumbnail = $_POST['thumbnail'];
    $query = "INSERT INTO posts(title,description,contents,thumbnail) VALUES ('".$title."', '".$description."','".$contents."','".$thumbnail."');";

    $status = $conn->query($query);
    var_dump($status);
    if($status == true)
    {
        setcookie('msg', 'Thêm mới thành công', time() + 5);
        header('Location: post.php');
    }
    else
    {
        setcookie('msg', 'Thêm mới không thành công', time() + 5);
        header('Location: post_add.php');
    }
?>