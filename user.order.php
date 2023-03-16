<?php
  include("connect.inc.php");
  session_start();
  $firstname = $_SESSION['user']->firstname;
  $lastname = $_SESSION['user']->lastname;
  $tel = $_SESSION['user']->tel; 
  $sql = "SELECT * FROM menu1200 WHERE tel='$tel'";
  $qOrder = $conn->query($sql);
  $num = $qOrder->num_rows;  
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
						<li class="nav-item"><a class="nav-link" href="index.php">หน้าแรก</a></li>
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
                        <li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">คุณ : <?php echo "$firstname" ?></a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="profile.php">ข้อมูลส่วนตัว</a>
								<a class="dropdown-item active" href="user.order.php">รายการสั่งจอง</a>
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
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>รายการสั่งจอง</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start Menu -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="d-flex row justify-content-center m-2">
            <table border="1" style="width:100%" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="table-dark text-center">
                                <td>จานที่ 1</td>
                                <td>จานที่ 2</td>
                                <td>จานที่ 3</td>
                                <td>จานที่ 4</td>
                                <td>จานที่ 5</td>
                                <td>จานที่ 6</td>
                                <td>จานที่ 7</td>
                                <td>จานที่ 8</td>
                                <td>จานที่ 9</td>
                                <td>จำนวนโต๊ะ</td>
                                <td>วันที่จัดงาน</td>
                                <td>เวลาที่จัดงาน</td>
                                <td>ยกเลิกเมนู</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($num >= 1) {
                                while ($order = $qOrder->fetch_object()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $order->dish1; ?></td>
                                        <td><?php echo $order->dish2; ?></td>
                                        <td><?php echo $order->dish3; ?></td>
                                        <td><?php echo $order->dish4; ?></td>
                                        <td><?php echo $order->dish5; ?></td>
                                        <td><?php echo $order->dish6; ?></td>
                                        <td><?php echo $order->dish7; ?></td>
                                        <td><?php echo $order->dish8; ?></td>
                                        <td><?php echo $order->dish9; ?></td>
                                        <td><?php echo $order->number_of_tables; ?></td>
                                        <td><?php echo $order->date; ?></td>
                                        <td><?php echo $order->time; ?></td>
                                        <td class="text-center">
                                            <form action="cancel.menu.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $order->id; ?>">
                                                <button class="btn btn-danger">ยกเลิก</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="13" class="text-center">--ไม่มีข้อมูลการสั่งจอง--</td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>      
            </div>
        </div>
    </div>                  
	<!-- End Menu -->

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