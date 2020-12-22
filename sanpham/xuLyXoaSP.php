<?php  
    $conn= new mysqli('localhost','root','','linhkiendientu');
    $id= $_GET['id'];

    $sql= "DELETE FROM sanpham where MaSP = '$id' "  ;
    $result=$conn->query($sql);
    
    if($result){
        header('Location: http://localhost/doAn/sanpham/selectSP.php');
    }
    else
        echo "Lỗi";
?>