<?php
    //$conn = new mysqli('localhost','root','','linhkiendientu');
    session_start();
    include 'connect.php';
    $id = $_SESSION['user']; 
    $email = $_POST['email'];
    $hoten = $_POST['hoten'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];

    $sql="UPDATE khachhang SET email = '$email', tenkh = '$hoten', diachi= '$diachi', dienthoai= '$sdt' WHERE taikhoan = '$id' ";

    $result = $conn->query($sql);
    if($result)
        //header("location: http://localhost/doAn/account/formDangKy.php");
        echo "Sửa thông tin thành công";
    else
        echo "Lỗi";

    $conn->close();    
?>