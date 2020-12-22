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

        tr,td{
            padding: 20px;
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
    
    include 'connect.php';
    $sql = " SELECT * FROM nhasanxuat ";  
    $result= $conn-> query($sql);
    if(!$result)
    {
        die('lỗi'. mysqli_error($conn));
    }   
?>

<div class="container">
    <table border="1">
    <h3><a href="http://localhost/doAn/NSX/themNSX.php" style="text-decoration-none; color: red ">Thêm nhà sản xuất mới</a></h3>
    <tr>
        <td>ID NSX</td>
        <td>Tên NSX</td>
        <td style="background-color: blue; color: white" > Sửa </td>
        <td style="background-color: blue; color: white" > Xóa </td>
    </tr>
    <?php
    while($row =mysqli_fetch_assoc($result)){?>
        <tr>
        <td> <?php echo $row['mansx']; ?></td>
        <td> <?php echo $row['tennsx']; ?> </td>
        
        <?php 
            echo "<td> <a href='http://localhost/doAn/NSX/suaNSX.php?id=".$row['mansx']."'> Sửa </a> </td>";    
            echo "<td> <a href='http://localhost/doAn/NSX/xuLyXoaNSX.php?id=".$row['mansx']."'> Xóa </a> </td>";
        ?>
       
    <?php }  
    mysqli_free_result($result);?>  
    </table>
 </div> 

</body>

</html>