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


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">

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
        <a class="navbar-brand" href="http://localhost/doAn/">
          <img src="http://localhost/doAn/Demo/images/Logo.png" height="50px"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doAn/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doAn/account/tkKhachHang.php">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doAn/danhmuc/main/danhmuc.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doAn/Demo/dangNhap.php">Log in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php 
    session_start();
    $iduser = $_SESSION['user'];
    //$conn = new mysqli('localhost','root','','linhkiendientu'); 
    include 'connect.php';
    $sql = "SELECT * FROM khachhang WHERE taikhoan = '$iduser' ";
    $result = $conn->query($sql)->fetch_assoc();
    

    ?>
    <div class="container">
       <form action="http://localhost/doAn/account/xuLySuaThongTin.php" method="post">
           <div id="tieude">
                    <?php
                        
                        if($_SESSION['user']){
                            
                            echo "<b>Chào bạn ". $_SESSION['user'] ."<b>";
                        }
                    ?>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" name="email" id="inputEmail" class="form-control"  value="<?php echo $result['email']; ?>" required="">
            </div>
            <div class="form-group">
                <label for="inputDiachi">Địa chỉ:</label>
                <input type="text" name="diachi" id="inputDiachi" class="form-control"  value="<?php echo $result['diachi']; ?>" required="">
            </div>
            <div style="margin-bottom: 2rem">
                <div class="form-row">
                    <div class="col-md-7">
                        <label for="inputHoten">Họ tên:</label>
                        <input type="text" name="hoten" id="inputHoten" class="form-control" value="<?php echo $result['tenkh'] ?>">
                    </div>
                    <div class="col-md-5">
                    <div>
                        <label for="inputSDT">SĐT:</label>
                        <input type="text" name="sdt" id="inputSDT" class="form-control" value="<?php echo $result['dienthoai'] ?>" required="">
                    </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sửa</button>
                <button type="reset" class="btn btn-primary">Xóa</button>
            </div>
       </form>
        
    </div>
    

</body>

</html>