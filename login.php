<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.register.css">
  <title>รุ่งเรือง โภชนา</title>
</head>
<body>
    <section>
        <div class="form-box-login">
            <div class="form-value">
                <form action="user.login.php" method="post">
                    <h2>เข้าสู่ระบบ</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email_tel" required id="email_tel" name="email_tel">
                        <label for="">อีเมล หรือ เบอร์โทรศัพท์</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required id="password" name="password">
                        <label for="">รหัสผ่าน</label>
                    </div>
                    <button type="submit">เข้าสู่ระบบ</button>
                    <div class="register">
                        <p>ไม่มีชื่อผู้ใช้นี้ <a href="register.php">สมัครสมาชิก</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>