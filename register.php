<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <title>Create a new account</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="handler2.php" method="POST">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input name="phone" type="tel" required>
                        <label for="">Phone Number</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input name="email" type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="password" type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button type="submit">Register</button>
                    <div class="register">
                        <p>Already have an account ? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>
</html>