<?php 
$db = new mysqli("localhost", "root", "", "ricemanagement");


    // if(isset($_POST["delete_by_id"])){
    //     $id = $_POST["delete_by_id"];

    //     $sql = "DELETE from student where id = ".$id;
    //     $db->query($sql);
    // }


    $sql = "SELECT * from rice";
    $result = $db->query($sql)->fetch_all();



  

//Lấy giá trị POST từ form vừa submit
if (isset($_POST['them'])) {
    $db->query("INSERT INTO rice (name,image,price) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['gia']."')");
    header('refresh:0');
}
if (isset($_POST['xoa'])) {
    $db->query("delete from rice where id = ".$_POST['xoa']);
   header('refresh:0');
}

 ?>
