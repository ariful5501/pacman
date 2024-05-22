<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <title>Log in to play</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form id="loginForm">
                    <!-- <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label for="remember"><input id="remember" type="checkbox">Remember Me</label>
                        <a href="#" style="text-decoration: none; color: #fff; font-size: 0.9em;">Forget Password?</a>
                    </div> -->
                    <button type="submit"><a style="text-decoration:none" href="login.php">Start the Game</a></button>
                    <div id="errorMessage" style="display: none; color: red; margin-top: 10px;">Invalid Password</div>
                    <div class="register">
                        <p>Don't have an account ? <a href="register.php">Register</a></p>
                    </div>
                    <div id="loginSuccessMessage" style="display: none; color: green; margin-top: 10px;">Login successful!</div>
                </form>
            </div>
        </div>
    </section>
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            // Get form values
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var rememberMe = document.getElementById("remember").checked;

            // Here you would typically send a request to the server to validate login credentials
            // For demonstration purposes, let's assume validation succeeds
            var errorMessage = document.getElementById("errorMessage");
            var loginSuccessMessage = document.getElementById("loginSuccessMessage");

            // Assume the login validation is successful
            // For demonstration purposes, let's say the password is correct
            if (password === "password") {
                // Hide error message
                errorMessage.style.display = "none";
                // Show login success message
                loginSuccessMessage.style.display = "block";
                // Redirect to welcome page
                window.location.href = "welcome.html";
            } else {
                // Show error message
                errorMessage.style.display = "block";
                // Hide login success message
                loginSuccessMessage.style.display = "none";
            }
            
        });
    </script> -->
</body>
</html>
