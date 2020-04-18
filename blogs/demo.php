<?php
	//Thong so ket noi
	$servername = "localhost";
	$username = "root";
	$password="";
	$dname = "blogs";
	
	//Tạo kết nối đến CSDL
	$conn = new mysqli($servername,$username,$password,$dname);
	//Truy Vấn câu lệnh
	$query = "SELECT * FROM posts";
	
	//Thực thi câu lệnh
	$result  = $conn->query($query);
	
	//Tạo một mảng chứa dữ liệu
	$categories = array();
	
	while($row = $result->fetch_assoc()){
		$categories[] = $row;
	}
	
	foreach($categories as $cate){
		echo"<pre>";
		
			print_r($cate);
		echo"</pre>";		
	}
?>