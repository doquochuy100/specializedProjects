<?php if (!isset($_SESSION)) session_start();
    $tam= isset($_SESSION['cart'])?$_SESSION['cart']:[]; 

    $user=isset($_SESSION['user'])?$_SESSION['user']:[];
    $action= isset($_GET['action'])?$_GET['action']:''; ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <style>
        tr,td{
            padding: 20px;
        }

        #tt1 {
            float:left;
            
        }

        #tt2{
            float: right;
            width:90%;
        }

        

    </style>
    <title>Document</title>
</head>
<body>
<?php
    include 'connect.php';
    $error = false;
    $dathang = false;
    $bangChuSo = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
    function chuoiNgauNhien($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }
    if ($action=='them')
    { 
        foreach($_POST['soluong'] as $key => $value){           
            if (isset($tam[$key]) ) 
                $tam[$key] += $value;                         //$value = số lượng của sản phẩm đó
              else 
                $tam[$key]= $value;                
    }
    }
   

    if ($action=='xoa')
    {
        $id= isset($_GET['id'])?$_GET['id']:'';
        unset($tam[$id]);   
    }

    if($action=='submit')
    {
        if(isset($_POST['capnhap'])){
            foreach($_POST['soluong'] as $key => $value){           
                    $tam[$key] = $value;                   
            }
        }
        else if(isset($_POST['dathang'])){
            
            if(!$_POST['hoten']){
                $error = "Bạn chưa nhập tên của người nhận.";
            }
            else if(!$_POST['email']){
                $error = "Bạn chưa nhập email.";
            }
            else if(!$_POST['sdt']){
                $error = "Bạn chưa nhập sdt.";
            }
            else if(!$_POST['diachi']){
                $error = "Bạn chưa nhập địa chỉ.";
            }else if(empty($_POST['soluong'])){
                $error = "Giỏ hàng đang rỗng.";
            }


            if($error == false && !empty($_POST['soluong'])){
                
                $a = "'".implode("','",array_keys($_POST['soluong']))."'";
                    //sử dụng hàm implode để nối các phần tử trong mảng lại thành 1 chuỗi
                $sql2 = "SELECT * FROM sanpham WHERE masp IN ($a) ";
                $result2 = $conn->query($sql2)->fetch_all(MYSQLI_ASSOC);
                $tongtien = 0;
                foreach($result2 as $key => $value){
                    //var_dump($result2); 
                    $tongtien += $value['gia'] *$_POST['soluong'][$value['masp']] ;
                        
                }
                
                $madh = chuoiNgauNhien($bangChuSo,6) ;
                $tenkh = $_POST['hoten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $ghichu = '';
                $create_time = date('d-m-Y'); 
                $last_update = date('d-m-Y');
                
                $sql3 = "INSERT INTO donhang (madh, tenkh, email, diachi, ghichu, tongtien, create_time, last_update)
                 VALUES ('$madh', '$tenkh', '$email', '$diachi', '$ghichu', '$tongtien', '$create_time', '$last_update')";  
                $result3 = $conn->query($sql3); 
                $insert_string = "";
                if($result3){
                    // var_dump($result2);
                 
                    foreach($result2 as $key => $value){         
                        $insert_string .= "(NULL, '".$madh."', '".$value['masp']."', '".$_POST['soluong'][$value["masp"]]."', '".$value['gia']."', '".$create_time."', '".$last_update."')";
                        // gán câu truy xuất trên vào biến $insert_string
                        if($key < count($result2)-1){  //nếu số key bé hơn số lượng thì gán dấu , vào câu truy xuất                                                 
                            $insert_string .= ",";      // không thêm dấu , vào cuối câu truy xuất
                        }                  
                    }  
                    $sql4= "INSERT INTO chitietdonhang (stt, madh, masp, soluong, gia, created_time, last_update)
                    VALUES ".$insert_string.""; //bỏ câu truy xuất vào sql
                    $result4 = $conn->query($sql4);
                    $dathang = "Đặt hàng thành công.";
                         

                }
                                
            }
        }
    }
    $_SESSION['cart']= $tam;
?>
<div class="container">
    <?php if(!empty($error)){?>
        <div>
            <?php echo $error ?><a href="javascript:history.back()">Quay lại</a>        
        </div>
    <?php }else if(!empty($dathang)) {
        echo $dathang."<a href='http://localhost/doAn/danhmuc/main/danhmuc.php'>Tiếp tục mua hàng</a>";
        unset($_SESSION['cart']);
    }          
    else { ?>
   
    <h3><a href="http://localhost/doAn/danhmuc/main/danhmuc.php" style="text-decoration-none; color: red ">Tiếp tục mua</a></h3> 
    <form action="gioHang.php?action=submit" method="post">   
        <table border="1">
        <tr>
            <td>STT</td>
            <td>Hình ảnh</td>
            <!-- <td>ID sản phẩm</td> -->
            <td> Tên sản phẩm </td>
            <td>Số lượng</td>
            <td>Thành tiền</td>
        
            <td style="background-color: blue; color: white"> Xóa </td>
        </tr>
        
        <?php
        $i=0;
        $tongtien=0;
        foreach($tam as $key => $value){

            $sql= "SELECT * FROM sanpham where masp='{$key}'";
            $result = $conn->query($sql)->fetch_assoc();
            
            $i++;
            ?>
            <tr>
                <td> <?php echo $i ?></td>
                <td> <img src="http://localhost/doAn/sanpham/img/<?php echo $result['hinh'];?>" style="max-width: 100px;"></td>
                <!-- <td> <?php echo $key ?> </td> -->
                <td> <?php echo $result['tensp']?></td>
                <td> <input type="text" name="soluong[<?php echo $result['masp'] ?>]" value="<?php echo $tam [$result['masp']]?>" style="width: 50px; text-align: center"> </td>
                                                    <!-- lưu số lượng vào mảng có tên là soluong => key là mã sp, value là số vừa thêm -->
                <td> <?php echo $result['gia']*$value;?></td>
                <td>
                    <a href="quanlyGioHang.php?action=xoa&id=<?php echo $key ?>">Xóa</a>
                </td>
            </tr>
        <?php 
            $tongtien += $result['gia']*$value;
        }  
    ?>  
            <tr>
                <td>&nbsp</td>
                <td>Tổng tiền</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td><input type="text" readonly style="width: 120px;" value="<?php echo $tongtien; ?>"></td>
                <td>&nbsp</td>
            </tr>
        </table>
        <br>  
        
        <hr>
        <div>
        <?php if($user) {?>
                <div>
                    <h3>Thông tin giao hàng</h3><br>

                    <?php 
                    if($user){
                        $sql1= "SELECT * FROM khachhang where taikhoan= '$user'";
                        $result1 = $conn->query($sql1)->fetch_assoc();
                    }
                    ?>
                    <?php if($user){
                        echo $result1['tenkh']." ";
                        echo "(".$result1['email'].")";
                        echo "<br><a href='dangxuat.php'>Đăng xuất</a>";
                    }else{?>
                    Bạn đã có tài khoản? <a href="dangNhapGioHang.php">Đăng nhập</a>
                    <?php }?>
                    <br>
                    <br>
                </div>

                <div id="tt1">
                    <label for="hoten">Người nhận:</label><br><br>
                    <label for="email">Email:</label><br><br>
                    <label for="diachi">Địa chỉ:</label><br><br>
                    <label for="sdt">Điện thoại</label><br><br>
                </div>
                <div id="tt2">
                    
                    <?php if($user) {?>
                        <input type="text" name="hoten" id="hoten" value="<?php echo $result1['tenkh'] ?>" style="width: 400px;"><br><br>
                        <input type="email" name="email" id="email" value="<?php echo $result1['email'] ?>" style="width: 400px;"><br><br>
                        <input type="text" name="diachi" id="diachi" value="<?php echo $result1['diachi'] ?>" style="width: 400px;"><br><br>
                        <input type="text" name="sdt" id="sdt" value="<?php echo $result1['dienthoai'] ?>" style="width: 400px;"><br><br>
                    <?php } 
                    else{?>
                        <input type="text" name="hoten" id="hoten" value="" style="width: 400px;"><br><br>
                        <input type="email" name="email" id="email" style="width: 400px;"><br><br>
                        <input type="text" name="diachi" id="diachi" style="width: 400px;"><br><br>
                        <input type="text" name="sdt" id="sdt" style="width: 400px;"><br><br>

                    <?php }?>
                </div>
        </div>
            <div class="form-group">
                <button type="submit" name="dathang" class="btn btn-primary">Đặt hàng</button>
                <button type="submit" name="capnhap" class="btn btn-primary"> Cập nhập</button>
            </div>
            <?php }else{ ?>
                Bạn cần đăng nhập tài khoản để đặt hàng. <a href="dangNhapGioHang.php">Đăng nhập</a>
          <?php  } ?>
        </form>
    <?php } ?>
 </div>   
</body>
</html>

