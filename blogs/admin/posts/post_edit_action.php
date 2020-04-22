<?php

require_once('../../connection.php');
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$contents = $_POST['contents'];
$query = "UPDATE posts  
          SET title = '".$title."' ,description ='".$description."' ,contents = '".$contents."'
          WHERE id =".$id;

$status = $conn->query($query);
var_dump($status);
if($status == true)
{
    setcookie('msg', 'Cập nhật thành công', time() + 5);
    header('Location: post.php');
}
else
{
    setcookie('msg', 'Cập nhật không thành công', time() + 5);
    header('Location: post_edit.php?id='.$id);
}
?>