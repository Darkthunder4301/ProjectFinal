<?php
  include("../connect.inc.php");
  session_start();
  if (!isset($_SESSION['user'])) {
    header("location: ../login.php");
  }
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

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
				<a class="navbar-brand" href="../index.php">
					<img src="../img/icon.png" height="60" alt="" />
				</a>
                <h1 class="m-0" style="color: darkgoldenrod;">รุ่งเรือง โภชนา</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="../index.php">หน้าแรก</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" id="dropdown-a" data-toggle="dropdown">เมนูโต๊ะจีน</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="menu/menu1200.php">โต๊ะจีน 1200 บาท</a>
								<a class="dropdown-item active" href="menu/menu1400.php">โต๊ะจีน 1400 บาท</a>
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
                            $tel = $_SESSION['user']->tel;
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
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>ชุดเมนู โต๊ะจีน 1400 บาท</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="container col-md-6 mt-3" style="color: red;">
        <form action="input.menu/menu1400.input.php" method="post">
            <table width="100%" border="0">
                <tbody>
                    <tr>
                        <td width="60px" valign="top">จานที่ 1</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish1" value="ข้าวเกรียบ" checked="checked" data-id="1" class="foodradio">
                        </td>
                        <td class="showimg">
                            ข้าวเกรียบ
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 2</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish2" value="ออเดร์ฟ 5 อย่าง" checked="checked" data-id="2" class="foodradio">
                        </td>
                        <td class="showimg">
                            ออเดร์ฟ 5 อย่าง
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 3</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish3" value="กระเพาะปลาน้ำแดง" checked="checked" data-id="3" class="foodradio">
                        </td>
                        <td class="showimg">
                            กระเพาะปลาน้ำแดง
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 4</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish4" value="ยำ 3 รส" checked="checked" data-id="4" class="foodradio">
                        </td>
                        <td class="showimg">
                            ยำ 3 รส
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish4" value="ยำสามกรอบ" data-id="5" class="foodradio">
                        </td>
                        <td class="showimg">
                            ยำสามกรอบ
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish4" value="ยำหมูย่าง" data-id="6" class="foodradio">
                        </td>
                        <td class="showimg">
                            ยำหมูย่าง
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 5</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish5" value="ก๋วยเตี๋ยวหลอดทรงเครื่อง" checked="checked" data-id="7" class="foodradio">
                        </td>
                        <td class="showimg">
                            ก๋วยเตี๋ยวหลอดทรงเครื่อง
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish5" value="ขาหมูอบยอดผัก" data-id="8" class="foodradio">
                        </td>
                        <td class="showimg">
                            ขาหมูอบยอดผัก
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish5" value="สลัดไก่ทอด" data-id="9" class="foodradio">
                        </td>
                        <td class="showimg">
                            สลัดไก่ทอด
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish5" value="หมูมะนาว" data-id="10" class="foodradio">
                        </td>
                        <td class="showimg">
                            หมูมะนาว
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 6</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish6" value="ส้มตำปลาทับทิมทอด" checked="checked" data-id="11" class="foodradio">
                        </td>
                        <td class="showimg">
                            ส้มตำปลาทับทิมทอด
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish6" value="ปลาทับทิมนึ่งบ้วย" data-id="12" class="foodradio">
                        </td>
                        <td class="showimg">
                            ปลาทับทิมนึ่งบ้วย
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish6" value="ปลาทับทิมนึ่งมะนาว" data-id="13" class="foodradio">
                        </td>
                        <td class="showimg">
                            ปลาทับทิมนึ่งมะนาว
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish6" value="ปลาทับทิมสามรส" data-id="14" class="foodradio">
                        </td>
                        <td class="showimg">
                            ปลาทับทิมสามรส
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 7</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish7" value="กระดูกหมูตุ๋นเห็ดหอมเยื่อไผ่" checked="checked" data-id="15" class="foodradio">
                        </td>
                        <td class="showimg">
                            กระดูกหมูตุ๋นเห็ดหอมเยื่อไผ่
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish7" value="ไก่ตุ๋นเห็ดหอมยาจีน" data-id="16" class="foodradio">
                        </td>
                        <td class="showimg">
                            ไก่ตุ๋นเห็ดหอมยาจีน
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish7" value="ต้มยำขาหมู" data-id="17" class="foodradio">
                        </td>
                        <td class="showimg">
                            ต้มยำขาหมู
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish7" value="ต้มยำรวมมิตรน้ำข้น" data-id="18" class="foodradio">
                        </td>
                        <td class="showimg">
                            ต้มยำรวมมิตรน้ำข้น
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 8</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish8" value="ข้าวผัดทรงเครื่อง" checked="checked" data-id="19" class="foodradio">
                        </td>
                        <td class="showimg">
                            ข้าวผัดทรงเครื่อง
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish8" value="ข้าวผัดปู-หมูหยอง" data-id="20" class="foodradio">
                        </td>
                        <td class="showimg">
                            ข้าวผัดปู - หมูหยอง
                        </td>
                    </tr>
                    <tr>
                        <td width="60px" valign="top">จานที่ 9</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish9" value="ข้าวเหนียวเผือก" checked="checked" data-id="21" class="foodradio">
                        </td>
                        <td class="showimg">
                            ข้าวเหนียวเผือก
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish9" value="เงาะลอยแก้ว" data-id="22" class="foodradio">
                        </td>
                        <td class="showimg">
                            เงาะลอยแก้ว
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish9" value="ฟรุ๊ตสลัดนมสด" data-id="23" class="foodradio">
                        </td>
                        <td class="showimg">
                            ฟรุ๊ตสลัดนมสด
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="20px" valign="top">
                            <input type="radio" name="Dish9" value="ลิ้นจี่ลอยแก้ว" data-id="24" class="foodradio">
                        </td>
                        <td class="showimg">
                            ลิ้นจี่ลอยแก้ว
                        </td>
                    </tr>
                </tbody>
            </table> <br> <hr>
            <h2>รายละเอียดสถานที่จัดงาน</h2>
            <label for="Name">ชื่อ-นามสกุล</label>
                <input type="text" id="Name" name="Name" style="width: 40%;" value="<?php echo "$firstname  $lastname" ?>"><br>
            <label for="Tel">เบอร์โทรศัพท์</label>
                <input type="int" id="Tel" name="Tel" style="width: 40%;" value="<?php echo $tel ?>"><br>
            <label for="number_of_tables">จำนวนโต๊ะที่ต้องการจอง</label>
                <input type="int" id="number_of_tables" name="number_of_tables" style="width: 30%;" placeholder="จองขั้นต่ำ 10 ชุด"><br>
            <tr>
                <td>วัน/เดือน/ปีที่จัดงาน</td>
                <td>:</td>
                <td><input type="date" name="date" id="date">  </td>
            </tr><br>
            <tr>
                <td>เวลาที่จัดงาน</td>
                <td>:</td>
                <td>
                    <input name="time" id="time" type="text" style="width:60px;" fdprocessedid="s2sbb"> น.
                </td>
            </tr><br>
            <label for="address">สถานที่จัดงาน</label>
                <input type="text" id="address" name="address" style="width: 50%;"><br>
            <span class="input-group-addon">จังหวัด</span>
                <select type="text" required name="province" class="form-control" style="width: 50%;">
                    <option value="นครปฐม">นครปฐม</option>
                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                    <option value="นนทบุรี">นนทบุรี</option>    
                    <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                    <option value="สมุทรสาคร">สมุทรสาคร</option>
                    <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                    <option value="อยุธยา">อยุธยา</option>
                    <option value="ปทุมธานี">ปทุมธานี</option>
                    <option value="อ่างทอง">อ่างทอง</option>
                    <option value="สมุทรปราการ">สมุทรปราการ</option>
                    <option value="นครนายก">นครนายก</option>
                    <option value="สระบุรี">สระบุรี</option>
                    <option value="ลพบุรี">ลพบุรี</option>
                    <option value="สิงห์บุรี">สิงห์บุรี</option>
                    <option value="ชัยนาท">ชัยนาท</option>
                    <option value="อุทัยธานี">อุทัยธานี</option>
            </select>
            <br><button type="submit" id="btn-submit" class="btn btn-success">สั่งจองเมนู</button>
        </form>
    </div> <br>
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