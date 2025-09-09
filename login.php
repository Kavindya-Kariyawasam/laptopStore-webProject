<?php
  require "database.php";

  if(isset($_POST["login-btn"])) {
    $username = $_POST["txt_username"];
    $password = $_POST["txt_password"];

    //Designing SQL Query Format
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $con->query($sql);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $db_un = $row["Username"];
        $db_pw = $row["Password"];

        if($db_un == $username && $db_pw == $password){
            echo "<script>alert('Login Successful');
            location.replace('home.html');</script>";
            
        } else{
            echo "<script>alert('Login Failed');</script>";
        }
      }
    } else {
      echo "<script>alert('User does not exist')</script>";
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LapStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script defer src="assets/js/menu.js"></script>
    <script defer src="assets/js/footer.js"></script>
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container">
          <div class="navbar-brand">
              <a href="home.html">
              <img src="./assets/images/icons/logo.png" alt="Lap_store logo">
              </a>
          </div>

          <ul class="navbar-nav-left">
            <li><a href="home.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="Laptop.html"><i class="fas fa-laptop"></i> Laptops</a></li>
            <li><a href="desktop.html"><i class="fas fa-desktop"></i> Desktops</a></li>
            <li><a href="accessories.html"><i class="fas fa-headphones"></i> Accessories</a></li>
            <li><a href="aboutus.html"><i class="fas fa-info-circle"></i> About</a></li>
          </ul>

          <ul class="navbar-nav-right">
              <li><button class="btn btn-dark-outline"><a href="login.php"><i class="fas fa-sign-in-alt"></i> Sign in</a></button></li>
              <li><button class="btn btn-dark"><a href="signup.php"><i class="fas fa-user-plus"></i> Join now</a></button></li>
          </ul>
          
          <!-- Hamburger Menu -->
          <button class="hamburger" type="button" id="menu-btn">
              <span class="hamburger-top"></span>
              <span class="hamburger-middle"></span>
              <span class="hamburger-bottom"></span>
          </button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden" id="menu">
        <ul>
          <li><a href="home.html"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="Laptop.html"><i class="fas fa-laptop"></i> Laptops</a></li>
          <li><a href="desktop.html"><i class="fas fa-desktop"></i> Desktops</a></li>
          <li><a href="accessories.html"><i class="fas fa-headphones"></i> Accessories</a></li>
          <li><a href="aboutus.html"><i class="fas fa-info-circle"></i> About</a></li>
        </ul>
        <div class="mobile-menu-bottom">
          <button class="btn btn-dark-outline"><a href="login.php"><i class="fas fa-sign-in-alt"></i> Sign in</a></button>
          <button class="btn btn-dark"><a href="signup.php"><i class="fas fa-user-plus"></i> Join now</a></button>
        </div>
    </div>

    <div class="auth-container">
      <div class="auth-card">
        <div class="auth-header">
          <i class="fas fa-user-circle auth-icon"></i>
          <h1>Welcome Back!</h1>
          <p>Sign in to your account to continue</p>
        </div>

        <form action="#" method="POST" id="loginForm" class="auth-form">
          <div class="input-group">
            <label for="username"><i class="fas fa-user"></i> Username or Email</label>
            <input type="text" id="username" name="txt_username" placeholder="Enter your username or email" required>
            <div class="error-message" id="usernameError"></div>
          </div>

          <div class="input-group">
            <label for="password"><i class="fas fa-lock"></i> Password</label>
            <div class="password-input">
              <input type="password" id="password" name="txt_password" placeholder="Enter your password" required>
              <button type="button" class="toggle-password" onclick="togglePassword()">
                <i class="fas fa-eye" id="toggleIcon"></i>
              </button>
            </div>
            <div class="error-message" id="passwordError"></div>
          </div>

          <div class="form-options">
            <label class="checkbox-container">
              <input type="checkbox" id="remember-me">
              <span class="checkmark"></span>
              Remember Me
            </label>
            <a href="forgotPassword.php" class="forgot-link">Forgot Password?</a>
          </div>

          <button type="submit" name="login-btn" class="auth-btn">
            <i class="fas fa-sign-in-alt"></i> Sign In
          </button>

          <div class="auth-footer">
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
          </div>
        </form>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="footer-content">
        <div class="footer-section">
          <h3>TechHub</h3>
          <p>Your trusted technology partner for all computing needs</p>
          <div class="newsletter-form">
            <h4>Newsletter</h4>
            <p>Stay updated with our latest offers</p>
            <div class="input-group">
              <input type="email" placeholder="Enter your email" />
              <button type="submit">
                <i class="fas fa-paper-plane"></i> Subscribe
              </button>
            </div>
          </div>
        </div>

        <div class="footer-section">
          <h4>Quick Links</h4>
          <ul>
            <li>
              <a href="home.html"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
              <a href="Laptop.html"><i class="fas fa-laptop"></i> Laptops</a>
            </li>
            <li>
              <a href="desktop.html"><i class="fas fa-desktop"></i> Desktops</a>
            </li>
            <li>
              <a href="accessories.html"
                ><i class="fas fa-mouse"></i> Accessories</a
              >
            </li>
            <li>
              <a href="aboutus.html"
                ><i class="fas fa-info-circle"></i> About Us</a
              >
            </li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Contact Info</h4>
          <p><i class="fas fa-map-marker-alt"></i> 123 Galle Road, Moratuwa</p>
          <p><i class="fas fa-phone"></i> +94 11 264 5789</p>
          <p><i class="fas fa-envelope"></i> info@techhub.lk</p>
          <p><i class="fas fa-clock"></i> Mon-Sat: 9AM-8PM</p>
        </div>

        <div class="footer-section">
          <h4>Follow Us</h4>
          <p>Connect with us on social media</p>
          <div class="social-links">
            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>
          &copy; 2024 TechHub. All rights reserved. | 
          <a href="privacyPolicy.html">Privacy Policy</a> | 
          <a href="termsConditions.html">Terms of Service</a>
        </p>
      </div>
    </footer>

    <script>
      function validateForm() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (!username || !password) {
          document.getElementById('usernameError').textContent = username ? '' : 'Username is required';
          document.getElementById('passwordError').textContent = password ? '' : 'Password is required';
          return false;
        }
        return true;
      }

      function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');
        
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          toggleIcon.classList.remove('fa-eye');
          toggleIcon.classList.add('fa-eye-slash');
        } else {
          passwordInput.type = 'password';
          toggleIcon.classList.remove('fa-eye-slash');
          toggleIcon.classList.add('fa-eye');
        }
      }

      // Add loading state to form submission
      document.getElementById('loginForm').addEventListener('submit', function(e) {
        if (validateForm()) {
          const submitBtn = this.querySelector('.auth-btn');
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Signing In...';
          submitBtn.disabled = true;
        }
      });
    </script>
  </body>
</html>