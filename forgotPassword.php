<?php
  require "database.php";

  if(isset($_POST["reset-btn"])) {
    $email = $_POST["txt_email"];

    // Check if email exists in database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $con->query($sql);
    
    if($result->num_rows > 0) {
      // In a real application, you would generate a reset token and send email
      echo "<script>alert('Password reset instructions have been sent to your email address.');
      location.replace('login.php');</script>";
    } else {
      echo "<script>alert('Email address not found in our records.');</script>";
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - LapStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/forgotPassword.css">
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
          <i class="fas fa-key auth-icon"></i>
          <h1>Forgot Password?</h1>
          <p>Don't worry! Enter your email and we'll send you reset instructions</p>
        </div>

        <form action="#" method="POST" id="forgotPasswordForm" class="auth-form">
          <div class="input-group">
            <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
            <input type="email" id="email" name="txt_email" placeholder="Enter your registered email address" required>
            <div class="error-message" id="emailError"></div>
          </div>

          <div class="info-box">
            <i class="fas fa-info-circle"></i>
            <div class="info-text">
              <p><strong>What happens next?</strong></p>
              <ul>
                <li>We'll send a secure reset link to your email</li>
                <li>Click the link to create a new password</li>
                <li>The link expires in 24 hours for security</li>
              </ul>
            </div>
          </div>

          <button type="submit" name="reset-btn" class="auth-btn">
            <i class="fas fa-paper-plane"></i> Send Reset Instructions
          </button>

          <div class="auth-footer">
            <p>Remember your password? <a href="login.php">Back to Sign In</a></p>
            <p class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></p>
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
        const email = document.getElementById('email').value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!email) {
          document.getElementById('emailError').textContent = 'Email is required';
          return false;
        }

        if (!emailRegex.test(email)) {
          document.getElementById('emailError').textContent = 'Please enter a valid email address';
          return false;
        }

        document.getElementById('emailError').textContent = '';
        return true;
      }

      // Add loading state to form submission
      document.getElementById('forgotPasswordForm').addEventListener('submit', function(e) {
        if (validateForm()) {
          const submitBtn = this.querySelector('.auth-btn');
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending Instructions...';
          submitBtn.disabled = true;
        } else {
          e.preventDefault();
        }
      });

      // Real-time email validation
      document.getElementById('email').addEventListener('input', function() {
        const email = this.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const errorElement = document.getElementById('emailError');

        if (email && !emailRegex.test(email)) {
          errorElement.textContent = 'Please enter a valid email address';
        } else {
          errorElement.textContent = '';
        }
      });
    </script>
  </body>
</html>