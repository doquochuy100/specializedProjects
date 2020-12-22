<?php 
    $tenloaiSP = $_POST['tenloaiSP'];
    $id=$_GET['id'];
    include 'connect.php';

    $sql= "UPDATE loaisanpham SET tenloai = '$tenloaiSP' WHERE maloai = '$id' ";

    $result = $conn->query($sql);

    if($result)
        header('Location: http://localhost/DoAn/loaisanpham/select.php');
    else
        echo "Lỗi";

    $conn->close();
?>