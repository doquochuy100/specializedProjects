<?php 
     $conn= new mysqli('localhost','root','','linhkiendientu'); 
     $hinh = $_FILES['hinh']['error']==0 ? $_FILES['hinh']['name']:'';  
     $maLSP = $_POST['maloaiSP'];
     $maSP  = $_POST['maSP'];
     $mota = $_POST['mota'];
     $baohanh = $_POST['baohanh'];
     $gia = $_POST['gia'];
     $tenSP = $_POST['tenSP'];
     $tenNSX = $_POST['nsx'];
     $addSP="INSERT INTO sanpham (masp,tensp,mota,baohanh,gia,hinh,maloai,tennsx) 
     VALUES ('$maSP','$tenSP','$mota','$baohanh','$gia','$hinh','$maLSP','$tenNSX')";
     $result = $conn->query($addSP);

     
    header('Location: http://localhost/doAn/sanpham/selectSP.php');
    if ($hinh !='')
     move_uploaded_file($_FILES['hinh']['tmp_name'], "img/$hinh");

     $conn->close();
?>