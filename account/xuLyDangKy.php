<?php 
    //$conn = new mysqli('localhost','root','','linhkiendientu');
   include 'connect.php';
   $id = $_POST['id'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $hoten = $_POST['hoten'];
   $diachi = $_POST['diachi'];
   $sdt = $_POST['sdt'];

   $sql="INSERT INTO khachhang (taikhoan,matkhau,email,tenkh,diachi,dienthoai) 
   VALUES ('$id','$password','$email','$hoten','$diachi','$sdt')";
   
   $result = $conn->query($sql);
   if($result)
        header("location: http://localhost/doAn/Demo/dangNhap.php");
        
    else
        echo "Email này đã có người sử dụng";

    $conn->close();  
?>