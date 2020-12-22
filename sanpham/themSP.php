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
                <a class="nav-link" href="http://localhost/doan/Demo/index3.php">Admin</a>
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
    if(!$_GET['id']){
        header('location: http://localhost/DoAn/loaisanpham/select.php');
    }
    $id = $_GET['id'];
    $conn= new mysqli('localhost','root','','linhkiendientu');
    $sql = " SELECT * FROM sanpham ";
    // $result= mysqli_query($conn, $sql);
    $result= $conn-> query($sql)->fetch_assoc(); 
    $sql1 = "SELECT * FROM nhasanxuat";
    $nsx = $conn->query($sql1); $dataNSX=mysqli_fetch_all($nsx,MYSQLI_ASSOC);
    
?>
<div class="container">
        <?php
        echo "<form action='http://localhost/doAn/sanpham/xuLyThemSP.php/?id=".$id."' method='post' enctype= 'multipart/form-data'>" ?>
       <label for="maloaisp"> Mã loại sản phẩm: </label> 
        <input type='text' name='maloaiSP' id='maloaisp' class='form-control' value='<?php echo $id ?>' readonly >

        <label for="masp">Mã sản phẩm:</label>
        <input type='text' name='maSP' id='masp' class='form-control'>

        <label for="tensp">Tên sản phẩm:</label>
        <input type='text' name='tenSP' id='tensp' class='form-control'><br>

        <label for="mota">Mô tả:</label>
        <textarea name="mota" id="mota" cols="155" rows="3"></textarea><br><br>

        <label for="nsx">Nhà sản xuất:</label>
        <select name="nsx" id="nsx" style="width: 100px" >
            <option value="">--chọn--</option>
            <?php
                foreach($dataNSX as $key => $value){?>
                    <option value='<?php echo $value['tennsx'] ?>'>
				    <?php echo $value['tennsx'] ?>
			  </option>
                <?php } ?>
        </select><br><br>

        <label for="hinh">Hình ảnh:</label>
        <input type="file" name="hinh" id="hinh"><br><br>  
        
        <label for="baohanh">Thời gian bảo hành:</label> 
        <input type='text' name='baohanh' id='baohanh' class='form-control'>

        <label for="gia">Giá:</label>
        <input type='text' name='gia' id='gia' class='form-control'><br>
        
        <input type="submit" value="Thêm" class="btn btn-primary" >
        <input type="reset" value="Xóa" class="btn btn-primary">
        </form>
    </div>
    

</body>

</html>