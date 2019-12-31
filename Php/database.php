<?php 
$db = new mysqli("localhost", "root", "", "ricemanagement");
//Hiển thị    
$sql = "SELECT * from rice";
$result = $db->query($sql)->fetch_all();

$sql2 ="SELECT * from rice2";
$result2 = $db->query($sql2)->fetch_all();

$sql3 ="SELECT * from rice3";
$result3 = $db->query($sql3)->fetch_all();
//Lấy giá trị POST từ form vừa submit
if (isset($_POST['them'])) {
	if ($_POST['select']=="comga") {{
		$db->query("INSERT INTO rice (name,image,price) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['gia']."')");
	}header('refresh:0');}
	elseif ($_POST['select']=="comsuon") {{
		$db->query("INSERT INTO rice2 (name,image,price) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['gia']."')");
	}header('refresh:0');}
	else{{
		$db->query("INSERT INTO rice3 (name,image,price) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['gia']."')");
	}header('refresh:0');}
}
//Xóa
if (isset($_POST['xoa'])) {
    $db->query("delete from rice where id = ".$_POST['xoa']);
    header('refresh:0');
}
//Sửa
if (isset($_POST['sua'])) { ?>
    <?php
	$sql = "SELECT * from rice WHERE id = '".$_POST['sua']."'";
	$result = $db->query($sql)->fetch_all();
	$_POST['ten']= $result[0][1];
	$_POST['anh']= $result[0][2]; 
	$_POST['gia']= $result[0][3]; 
	$db->query("UPDATE rice news SET name='".$_POST['ten']."',image='".$_POST['anh']."',price='".$_POST['gia']."' WHERE id='".$_POST['sua']."'");
}
?>
