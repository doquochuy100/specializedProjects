<?php
    //$conn = new mysqli('localhost','root','','linhkiendientu');
    session_start();
    include 'connect.php';
    $id = $_SESSION['user']; 
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    

    $sql = "SELECT * FROM khachhang WHERE taikhoan = '$id'";
    $result = $conn->query($sql)->fetch_assoc();

    if($result['matkhau']==$oldPassword){

        $setPassword="UPDATE khachhang SET matkhau = '$newPassword' WHERE taikhoan = '$id' ";
        $set = $conn->query($setPassword);
        echo "Sửa thông tin thành công";
    }
    else{
        echo "Sai mật khẩu";
    }
    
    // if($set)
    //     //header("location: http://localhost/doAn/account/formDangKy.php");
    //     echo "Sửa thông tin thành công";

    $conn->close();    
?>