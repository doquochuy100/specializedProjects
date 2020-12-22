<?php  
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    session_start();
    include 'connect.php';
    $id = $_SESSION['user'];

    $sql= "DELETE FROM khachhang where taikhoan = '$id' "  ;
    $result=$conn->query($sql);
    

    if($result){
        header('location: http://localhost/doAn/Demo/dangNhap.php');
        session_unset();
    }
    else{
        echo "Tài khoản này đang có đơn hàng, không thể xóa. <a href='http://localhost/doAn/account/tkKhachHang.php' >Quay lại</a>";
    }
    
?>