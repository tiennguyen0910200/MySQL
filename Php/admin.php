<!DOCTYPE html>
<html>
<head>
	<title>Rice store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../Css/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container">
		<div>
			<div class="header">
				<div class="header1">
					<div class="flex">
						<ul class="flex1">
							<li><img src="../Img/telephone.png">(+84)983 942 707</li>
							<li><img src="../Img/map.png">Xuân Phú - Hòa Sơn - Hòa Vang - TP. Đà Nẵng</li>
							<li><img src="../Img/fb.png">Dàn Nhạc Trịnh</li>
						</ul>
						<ul class="flex2">
							<li><img src="../Img/user.png">Đăng kí</li>
							<li><img src="../Img/user.png">Đăng nhập</li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="header2">
					<div class="logo">
						<img width="150px" height="150px" src="../Img/logo.png">

					</div>
					<div class="menu">
						<div>
							<img src="../Img/home.png">
							<br>
							<h4>Trang chủ</h4>
						</div>
						<div>
							<img src="../Img/contact.png">
							<br>
							<h4>Liên hệ</h4>
						</div>
						<div>
							<img src="../Img/phone.png">
							<br>
							<h4>Tư vấn</h4>
						</div>
						<div>
							<img src="../Img/percen.png">
							<br>
							<h4>Khuyến mãi</h4>
						</div>
						<div>
							<img src="../Img/detail.png">
							<br>
							<h4>Chi tiết</h4>
						</div>
						<div>
							<img src="../Img/time.png">
							<br>
							<h4>Thời gian</h4>
						</div>
						<div>
							<img src="../Img/new.png">
							<br>
							<h4>Dịch vụ mới</h4>
						</div>
						<div>
							<img src="../Img/more.png">
							<br>
							<h4>Khác</h4>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="menubar">
			<ul>
				<li><a href="#">CƠM SƯỜN</a>
					<ul class="sub-menu">
						<li><a href="#">Heo</a></li>
						<li><a href="#">Bò</a></li>
						
					</ul>
				</li>

				<li><a href="#">CƠM CÁ</a></li>
				<li><a href="#">CƠM GÀ</a>
					<ul class="sub-menu">
						<li><a href="#">Gà Chiên</a></li>
						<li><a href="#">Gà Kho</a></li>
						<li><a href="#">Gà luộc</a></li>
					</ul>
				</li>
				<li style="margin-right: 450px;"><a href="#">KHÁC</a></li>
				<input autocomplete="off" class="search" placeholder="Tìm kiếm bài viết" spellcheck="false" type="text">


			</ul>
			<br>



		</div>
		<div class="w3-content w3-display-container" style="max-width:1150px">
			<img class="mySlides" src="../Img/3.jpg" style="width:1150px; height: 400px">
			<img class="mySlides" src="../Img/1.jpg" style="width:1150px; height: 400px">
			<img class="mySlides" src="../Img/2.jpg" style="width:1150px; height: 400px">
			<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
				<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
				<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
				<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
				<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
				<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
			</div>
		</div>

		<script>
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
				showDivs(slideIndex += n);
			}

			function currentDiv(n) {
				showDivs(slideIndex = n);
			}

			function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("demo");
				if (n > x.length) {slideIndex = 1}
					if (n < 1) {slideIndex = x.length}
						for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";  
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" w3-white", "");
						}
						x[slideIndex-1].style.display = "block";  
						dots[slideIndex-1].className += " w3-white";
					}

				</script>
				<hr>
				<div class="flex">
				    <div class="hero-image1">
					<div class="hero-text">
						<h5 style="font-size:15px">I am John Doe</h5>
						<p>And I'm a Photographer</p>
						<button>Hire me</button>
					</div>
				    </div>
					<div class="hero-image2">
					<div class="hero-text">
						<h5 style="font-size:15px">I am John Doe</h5>
						<p>And I'm a Photographer</p>
						<button>Hire me</button>
					</div>
				    </div>
				</div>
				<hr>
				<div style="text-align: center;">
				<h1>Cơm Gà</h1>
				</div>
				<div style="display: flex; justify-content: center;">
					<?php include 'database.php';
					for ($i=0; $i < count($result)  ; $i++) { 
					?>
					<div  class="border">
						<img  height="200px" width="200px" src="<?php echo $result[$i][1] ?>" alt="">
						<p><?php  echo $result[$i][2]; ?></p>
						<p><?php echo $result[$i][3]; ?></p>
					</div>	
					<?php 
					}
					?>
				</div>
				<br>

					<form action="" method="get" accept-charset="utf-8">
						<label>Link ảnh</label>
						<input type="" name="">
						<label>Tên</label>
						<input type="" name="">
						<label>Giá</label>
						<input type="" name="">
						
					</form>
			</div>


		</body>
		</html>