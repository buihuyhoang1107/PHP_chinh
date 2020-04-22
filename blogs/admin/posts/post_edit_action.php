<?php

require_once('../../connection.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
// upload file
$target_dir = "../../img/";  // thư mục chứa file upload
$thumbnail="";

$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

$status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

if ($status_upload) { // nếu upload file không có lỗi 
    $thumbnail =",thumbnail = '". basename( $_FILES["thumbnail"]["name"]."'");
}




$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$contents = $_POST['contents'];
$category_id = $_POST['category_id'];
$status = 0;
if(isset($_POST['status']) )
{
    $status  = $_POST['status'];
}
$author_id = 1;
$query = "UPDATE posts  
          SET title = '".$title."' ,description ='".$description."' ,contents = '".$contents."', 
          category_id =".$category_id.$thumbnail.",author_id = '".$author_id."',status = '".$status."'
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