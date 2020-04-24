<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 align="center">Zent - Education And Technology Group</h3>
        <h3 align="center">Registration</h3>
        <hr>
        <?php
        if(isset($_COOKIE['msg'])) { 
        ?>
        <div class="alert alert-warning">
            <strong>Thất bại!</strong> Tạo tài khoản không thành công !!!
        </div>
        <?php } ?>
        <!-- customer_addInfomation_action.php -->
        <form action="customer_addInfomation_action.php" onsubmit="return Validate()" method="POST" role="form"
            enctype="multipart/form-data" name="vform">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Full Name" name="name_customer">
                <div id="name_error"></div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Email" name="email">
                <div id="email_error"></div>

            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password">

            </div>
            <div class="form-group">
                <label for="">Password Confirmation</label>
                <input type="password" class="form-control" id="" placeholder="Password Confirmation"
                    name="password_confirmation">
                <div id="password_error"></div>

            </div>
            <button type="submit" class="btn btn-primary" name="register">Create</button>
        </form>
    </div>
    <script>
    // lấy toàn bộ dữ liệu người dùng
    var name_customer = document.forms["vform"]["name_customer"];
    var email = document.forms["vform"]["email"];
    var password = document.forms["vform"]["password"];
    var password_confirmation = document.forms["vform"]["password_confirmation"];

    //Kiểm tra lỗi
    var name_error = document.getElementById("name_error");
    var email_error = document.getElementById("email_error");
    var password_error = document.getElementById("password_error");


    //Cài đặt sự kiện
    name_customer.addEventListener("blur", nameVerify, true);
    email.addEventListener("blur", emailVerify, true);
    password.addEventListener("blur", passwordVerify, true);

    //Hàm sử lý
    function Validate() {
        if (name_customer.value == "") {
            name_customer.style.border = "1px solid red";
            name_error.textContent = "Username is required";
            name_customer.focus();
            return false;
        }
        if (email.value == "") {
            email.style.border = "1px solid red";
            email_error.textContent = "Email is required";
            email.focus();
            return false;
        }
        if (password.value == "") {
            password.style.border = "1px solid red";
            password_error.textContent = "Password is required";
            password.focus();
            return false;
        }

        //Kiểm tra 2 password
        if (password.value != password_confirmation.value) {
            password.style.border = "1px solid red";
            password_confirmation.style.border = "1px solid red";
            password_error.innerHTML = "The two passwords do not match";
            return false;
        }

    }

    //Sử lý khi không rỗng
    function nameVerify() {
        if (name_customer.value != "") {
            name_customer.style.border = "1px solid #1111";
            name_error.innerHTML = "";
            return true;
        }
    }

    function emailVerify() {
        if (email.value != "") {
            email.style.border = "1px solid #1111";
            email_error.innerHTML = "";
            return true;
        }
    }

    function passwordVerify() {
        if (password.value != "") {
            password.style.border = "1px solid #1111";
            password_error.innerHTML = "";
            return true;
        }
    }
    </script>
</body>

</html>