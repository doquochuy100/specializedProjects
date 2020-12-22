<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log_In_Methods</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // $(document).ready(function(){
        //     $(".buttonSubmit").click(function(){
               
        //         $.ajax({
        //             type: "post",
        //             url : "http://localhost/doAn/account/xuLyDangNhap.php",
        //             data : {
        //                 "username" : $("input[name=username]").val(),
        //                 "password" : $("input[name=password]").val(),
        //             },
        //             success : function(msg){
        //                 alert(msg);
        //             },
        //         })
        //     });
        // });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/doan/style.css" rel="stylesheet">

    <style>
        .dangnhap {
            padding: 16px;
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .dangnhap h1 {
            margin-top: 0;
            margin-bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .dangnhap input {
            margin: 10px 0 10px 0;
            padding: 10px 10px;
            width: 100%;
            display: inline-block;
            border: 1px solid #cccccc;
            box-sizing: border-box;
            outline: none;
        }

        .dangnhap button {
            margin-top: 20px;
            width: 100%;
            height: 40px;
            border: none;
            color: #ffffff;
            background-color: seagreen;
            font-size: 16px;
            font-weight: bold;
            outline: none;
            border-radius: 50px;
            cursor: pointer;
        }

        .dangnhap button:hover {
            opacity: 0.8;
        }
        
        .dangnhap p {
            font-size: 16px;
            font-weight: bold;
        }

        .dangnhap p a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="result"></div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/doan/index.html">
          <img src="./images/Logo.png" height="50px"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doan/index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doAn/danhmuc/main/danhmuc.php">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <form class="dangnhap" action="http://localhost/doAn/account/xuLyDangNhap.php" method="post">
        <h1>Please Log in on your device to continute.</h1>
        <input type="text" name="username" placeholder="Username" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <button type="submit" name="submit" class="buttonSubmit" id="submit">Login</button>
        <p>Bạn chưa có tài khoản? <a href="http://localhost/doAn/account/formDangKy.php">Đăng ký</a></p>
    </form>
    

</body>

</html>