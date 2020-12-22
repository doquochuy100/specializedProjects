<?php 
    $tenNSX = $_POST['tenNSX'];
    $id=$_GET['id'];
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    include 'connect.php';
    $sql= "UPDATE nhasanxuat SET TenNSX = '$tenNSX' WHERE mansx = '$id' ";
    $result = $conn->query($sql);
    if($result)
        header('Location: http://localhost/doAn/NSX/selectNSX.php');
    else
        echo "Lỗi";
    $conn->close();
?>