<?php
          $conn = new mysqli('localhost','root','','linhkiendientu');
        
        //  echo $user = $_POST['user'];
        //  echo $pass = $_POST['pass'];
             $username = $_POST['username'];
             $password = $_POST['password'];


            $sql = "SELECT * FROM khachhang WHERE taikhoan = '$username'";
            $result = $conn->query($sql)->fetch_assoc();

            if($result['matkhau']==$password){

                session_start();
                $_SESSION['user'] = $username;
                header('location: giohang.php');
            } 
            else{    
                echo "<h2>Sai tài khoản hoặc mật khẩu</h2>";
            }
         

         
        $conn->close();
    ?>