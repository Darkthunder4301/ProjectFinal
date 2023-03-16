<?php
  include("connect.inc.php");
  $sql = "SELECT * FROM province";
  $qUser = $conn->query($sql);
  session_start();
  // if (!isset($_SESSION['user'])) {
  //   header("location: login.php");
  // }
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ร้าน รุ่งเรือง โภชนา รับจัดโต๊ะจีน</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="img/icon.png" height="60" alt="" />
				</a>
        <h1 class="m-0" style="color: darkgoldenrod;">รุ่งเรือง โภชนา</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">หน้าแรก</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">เมนูโต๊ะจีน</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="menu/menu1200.php">โต๊ะจีน 1200 บาท</a>
								<a class="dropdown-item" href="menu/menu1400.php">โต๊ะจีน 1400 บาท</a>
                <a class="dropdown-item" href="menu/menu1500.php">โต๊ะจีน 1500 บาท</a>
								<a class="dropdown-item" href="menu/menu1800.php">โต๊ะจีน 1800 บาท</a>
                <a class="dropdown-item" href="menu/menu2000.php">โต๊ะจีน 2000 บาท</a>
								<a class="dropdown-item" href="menu/menu2100.php">โต๊ะจีน 2100 บาท</a>
                <a class="dropdown-item" href="menu/menu2300.php">โต๊ะจีน 2300 บาท</a>
								<a class="dropdown-item" href="menu/menu2500.php">โต๊ะจีน 2500 บาท</a>
                <a class="dropdown-item" href="menu/menu3100.php">โต๊ะจีน 3100 บาท</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="about.php">เกี่ยวกับเรา</a></li>
            <?php
              if (!isset($_SESSION['user'])) {
            ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">อื่นๆ</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="login.php">เข้าสู่ระบบ</a>
								<a class="dropdown-item" href="register.php">สมัครสมาชิก</a>
							</div>
						</li>
            <?php
              }else{
                $firstname = $_SESSION['user']->firstname;
                $lastname = $_SESSION['user']->lastname;
                $id = $_SESSION['user']->id;
            ?>
            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">คุณ : <?php echo "$firstname" ?></a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="profile.php">ข้อมูลส่วนตัว</a>
								<a class="dropdown-item" href="user.order.php">รายการสั่งจอง</a>
								<a class="dropdown-item" href="user.logout.php">ออกจากระบบ</a>
							</div>
						</li>
            <?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="img/001.jpg" alt="">
				<div class="container">
					<div class="row">
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="img/002.jpg" alt="">
				<div class="container">
					<div class="row">
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="img/005.jpg" alt="">
				<div class="container">
					<div class="row">
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="img/006.jpg" height="400px" alt="">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>ร้าน รุ่งเรือง โภชนา โต๊ะจีน</h1>
						<p>รับจัดโต๊ะจีน ตั้งแต่ 10 โต๊ะขึ้นไป ราคาถูก อาหารสดคุณภาพดี ไม่สต๊อกสินค้า</p>
						<p>เรามีทีมงานพร้อมบริการ ไม่ว่าจะเป็น จัดโต๊ะจีนงานแต่งงาน งานบวช งานเลี้ยงบริษัท งานเลี้ยงพระทำบุญขึ้นบ้านใหม่ เลี้ยงวันเกิด งานครบรอบต่างๆ</p>
            <p>จัดอาหารสำหรับ พระพุทธ เจ้าที่ บรรพบุรุษ ( เป็นถ้วยเล็ก ๆ ฟรี )</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>เมนูโต๊ะจีน</h2>
					</div>
				</div>
			</div>
			
        <a href="menu/menu1200.php">
          <div class="row special-list">
          <div class="col-lg-4 col-md-6 special-grid drinks">
            <div class="gallery-single fix">
              <img src="img/m01.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 1</h4>
                <p></p>
                <h5>ชุดละ 1200 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
        <a href="menu/menu1400.php">
          <div class="col-lg-4 col-md-6 special-grid drinks">
            <div class="gallery-single fix">
              <img src="img/m02.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 2</h4>
                <p></p>
                <h5>ชุดละ 1400 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
        <a href="menu/menu1500.php">
          <div class="col-lg-4 col-md-6 special-grid drinks">
            <div class="gallery-single fix">
              <img src="img/m03.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 3</h4>
                <p></p>
                <h5>ชุดละ 1500 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
        <a href="menu/menu1800.php">
          <div class="col-lg-4 col-md-6 special-grid lunch">
            <div class="gallery-single fix">
              <img src="img/m04.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 4</h4>
                <p></p>
                <h5>ชุดละ 1800 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
        <a href="menu/menu2000.php">
          <div class="col-lg-4 col-md-6 special-grid lunch">
            <div class="gallery-single fix">
              <img src="img/m05.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 5</h4>
                <p></p>
                <h5>ชุดละ 2000 บาท</h5>
              </div>
            </div>
          </div> 
        </a>
				
        <a href="menu/menu2100.php">
          <div class="col-lg-4 col-md-6 special-grid lunch">
            <div class="gallery-single fix">
              <img src="img/m06.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 6</h4>
                <p></p>
                <h5>ชุดละ 2100 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
        <a href="menu/menu2300.php">
          <div class="col-lg-4 col-md-6 special-grid dinner">
            <div class="gallery-single fix">
              <img src="img/m07.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 7</h4>
                <p></p>
                <h5>ชุดละ 2300 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
        <a href="menu/menu2500.php">
          <div class="col-lg-4 col-md-6 special-grid dinner">
            <div class="gallery-single fix">
              <img src="img/m08.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 8</h4>
                <p></p>
                <h5>ชุดละ 2500 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
        <a href="menu/menu3100.php">
          <div class="col-lg-4 col-md-6 special-grid dinner">
            <div class="gallery-single fix">
              <img src="img/m09.jpg" class="img-fluid" alt="Image">
              <div class="why-text">
                <h4>เมนูโต๊ะจีน ชุดที่ 9</h4>
                <p></p>
                <h5>ชุดละ 3100 บาท</h5>
              </div>
            </div>
          </div>
        </a>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->

  <div class="row mt-4">
      <div class="container">
        <h2>ค่าจัดส่งคิดตามจังหวัด และจำนวนโต๊ะที่สั่ง ตามตาราง</h2>
        <table border="1" style="width:100%; background-color: #FFFF99;">
            <tr style="background-color: #FFCC99;">
              <td>จังหวัด</td>
              <td>ค่าส่ง/10ชุด</td>
              <td>ค่าส่ง/20ขุด</td>
              <td>ค่าส่ง/30ชุด</td>
              <td>ค่าส่ง/40ขุด</td>
            </tr>
        <?php
        $num = $qUser->num_rows;
        if($num > 0){
            $i = 1;
            while($row = $qUser->fetch_object()){
        ?>
            <tr>
                <td><?php echo$row->province; ?></td>
                <td><?php echo$row->sets10; ?></td>
                <td><?php echo$row->sets20; ?></td>
                <td><?php echo$row->sets30; ?></td>
                <td><?php echo$row->sets40; ?></td>
            </tr>
        <?php
            }
        }else{
        ?>
            <tr>
                <td colspan="3">--No Data--</td>
            </tr>
        <?php
        }
        ?>
        </table><br>
      </div>
  </div>

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>เบอร์ติดต่อ</h4>
						<p class="lead">
							0857046251
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>อีเมล</h4>
						<p class="lead">
              RungruengPhochana@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>ที่อยู่</h4>
						<p class="lead">
							206 ต.สามง่าม อ.ดอนตูม จ.นครปฐม
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>