<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.register.css">
  <title>Register</title>
</head>
<body>
    <section>
        <div class="form-box-reg">
            <div class="form-value">
                <form action="user.register.php" method="post">
                    <h2>สมัครสมาชิก</h2>
                    <div class="inputbox">
                        <input type="firstname" required id="firstname" name="firstname">
                        <label for="">ชื่อ</label>
                    </div>
                    <div class="inputbox">
                        <input type="lastname" required id="lastname" name="lastname">
                        <label for="">นามสกุล</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" required id="email" name="email">
                        <label for="">อีเมล</label>
                    </div>
                    <div class="inputbox">
                        <input type="tel" required id="tel" name="tel">
                        <label for="">เบอร์โทรศัพท์</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" required id="password" name="password">
                        <label for="">รหัสผ่าน</label>
                    </div>
                    <button type="submit">สมัครสมาชิก</button>
                    <div class="register">
                        <p>มีสมาชิกอยู่แล้ว <a href="login.php">เข้าสู่ระบบ</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>