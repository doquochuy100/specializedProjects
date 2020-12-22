<?php
          //$conn = new mysqli('localhost','root','','linhkiendientu');
        
             include 'connect.php';
             $username = $_POST['username'];
             $password = $_POST['password'];


            $sql = "SELECT * FROM khachhang WHERE taikhoan = '$username'";
            $result = $conn->query($sql)->fetch_assoc();

            if($result['matkhau']==$password){

                session_start();
                $_SESSION['user'] = $username;
                header('location: http://localhost/doAn/account/tkKhachHang.php');
            } 
            else{    
                echo "<h2>Sai tài khoản hoặc mật khẩu</h2>";
            }
         

         
        $conn->close();
    ?>