<?php  
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    include 'connect.php';
    $id= $_GET['id'];

    $sql= "DELETE FROM nhasanxuat where MaNSX = '$id' "  ;
    $result=$conn->query($sql);
    
    if($result){
        header('Location: http://localhost/doAn/NSX/selectNSX.php');
    }
    else
        echo "Lỗi";
?>