<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php include 'database.php'; ?>
	<H3>Thêm Sản Phẩm</H3>
	<br>
	<form method="post">
	  <div class="form-row">
	    <div class="col">
	      <label>Ảnh</label>
	      <input type="text" name="anh" class="form-control" placeholder="Địa chỉ ảnh">
	    </div>
	    <div class="col">
	      <label>Tên cơm</label>
	      <input type="text" name="ten" class="form-control" placeholder="Tên">
	    </div>
	    <div class="col">
	      <label>Giá</label>
	      <input type="text" name="gia" class="form-control" placeholder="Giá">
	    </div>
	    <button type="submit" class="btn btn-default" name="them">Thêm</button>
	  </div>

	</form>
	<?php if (isset($_POST['them'])) {
	  	$sql_insert = 'INSERT INTO rice(image,name,price) VALUES ('.$_POST['anh'].','.$_POST['ten'].','.$_POST['gia'].')';
	  	$db->query($sql_insert);
	  } ?>
	<table align="center" border="1px" cellspacing="0" class="table table-hover">
		
			<tr>
				<th>Id</th>
				<th>Ảnh</th>
				<th>Tên cơm</th>
				<th>Giá</th>
				<th></th>
				
			</tr>
		
		<tbody>
			<tr>
				<?php
				for ($i=0; $i < count($result)  ; $i++) { 
					?>
				<td><?php  echo $result[$i][0]; ?></td>
				<td><img src="<?php  echo $result[$i][2]; ?>"></td>
				<td><?php  echo $result[$i][1]; ?></td>
				<td><?php  echo $result[$i][3]; ?></td>
				<td><button type="button" class="btn btn-default">Sửa</button>
				<button type="button" class="btn btn-default">Xóa</button></td>
			<?php } ?>

			</tr>
		</tbody>
	</table>

</body>
</html>