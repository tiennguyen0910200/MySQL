<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<H3>Thêm Sản Phẩm</H3>
	<br>
	<form>
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
	    <button type="submit" class="btn btn-default">Thêm</button>
	  </div>

	</form>
	<table class="table table-hover">
		
			<tr>
				<th>Id</th>
				<th>Ảnh</th>
				<th>Tên cơm</th>
				<th>Giá</th>
				<th></th>
				<th></th>
			</tr>
		
		<tbody>
			<tr>
				<?php include 'database.php';
				for ($i=0; $i < count($result)  ; $i++) { 
					?>
				<td><?php  echo $result[$i][2]; ?></td>
				<td><?php  echo $result[$i][2]; ?></td>
				<td><?php  echo $result[$i][2]; ?></td>
				<td><?php  echo $result[$i][2]; ?></td>
				<button type="button" class="btn btn-default">Sửa</button>
				<button type="button" class="btn btn-default">Xóa</button>
			<?php } ?>

			</tr>
		</tbody>
	</table>

</body>
</html>