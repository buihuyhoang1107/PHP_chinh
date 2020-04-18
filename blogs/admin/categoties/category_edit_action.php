
<?php

require_once('../../connection.php');
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$query = "UPDATE categories SET title = '".$title."' ,description ='".$description."' WHERE id =".$id;

$status = $conn->query($query);
var_dump($status);
if($status == true)
{
    setcookie('msg', 'Cập nhật thành công', time() + 5);
    header('Location: category_list.php');
}
else
{
    setcookie('msg', 'Cập nhật không thành công', time() + 5);
    header('Location: category_edit.php?id='.$id);
}
?>
