<?php 
$db = new mysqli("localhost", "root", "", "ricemanagement");


    // if(isset($_POST["delete_by_id"])){
    //     $id = $_POST["delete_by_id"];

    //     $sql = "DELETE from student where id = ".$id;
    //     $db->query($sql);
    // }


    $sql = "SELECT * from rice";
    $result = $db->query($sql)->fetch_all();



    $anh = "";
    $ten = "";
    $gia = "";
  

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["anh"])) { $anh = $_POST['anh']; }
    if(isset($_POST["ten"])) { $ten = $_POST['ten']; }
    if(isset($_POST["gia"])) { $gia = $_POST['gia']; }
    
    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO rice (anh, ten, gia)
    VALUES ('$anh', '$ten', '$gia')";

    if ($db->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

 ?>
