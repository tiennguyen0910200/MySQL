<?php 
$db = new mysqli("localhost", "root", "", "ricemanagement");


    // if(isset($_POST["delete_by_id"])){
    //     $id = $_POST["delete_by_id"];

    //     $sql = "DELETE from student where id = ".$id;
    //     $db->query($sql);
    // }


    $sql = "SELECT * from rice";
    $result = $db->query($sql)->fetch_all();

 ?>