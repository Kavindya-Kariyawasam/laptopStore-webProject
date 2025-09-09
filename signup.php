<?php
  require "database.php";

  if(isset($_POST["signup-btn"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username or email already exists
    $checkSql = "SELECT * FROM Users WHERE Username='$username' OR Email='$email'";
    $checkResult = $con->query($checkSql);
    
    if($checkResult->num_rows > 0) {
      echo "<script>alert('Username or Email already exists');</script>";
    } else {
      // Insert new user
      $sql = "INSERT INTO Users(Name,Email,Username,Password)VALUES('$name','$email','$username','$password');";
      $result = $con->query($sql);

      if($result===true){
        echo "<script>alert('Successfully created an account');
        location.replace('login.php');</script>";
      }else{
        echo "<script>alert('Data Insertion Failed');</script>";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - LapStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/signup.css">
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
          <i class="fas fa-user-plus auth-icon"></i>
          <h1>Create Account</h1>
          <p>Join LapStore for the best tech deals</p>
        </div>

        <form id="signup-form" action="#" method="POST" class="auth-form">
          <div class="form-row">
            <div class="input-group">
              <label for="name"><i class="fas fa-user"></i> Full Name</label>
              <input type="text" id="name" name="name" placeholder="Enter your full name" required>
              <div class="error-message" id="nameError"></div>
            </div>
          </div>

          <div class="form-row">
            <div class="input-group">
              <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
              <div class="error-message" id="emailError"></div>
            </div>
          </div>

          <div class="form-row">
            <div class="input-group">
              <label for="username"><i class="fas fa-at"></i> Username</label>
              <input type="text" id="username" name="username" placeholder="Choose a username" required>
              <div class="error-message" id="usernameError"></div>
            </div>
          </div>

          <div class="form-row">
            <div class="input-group">
              <label for="password"><i class="fas fa-lock"></i> Password</label>
              <div class="password-input">
                <input type="password" id="password" name="password" placeholder="Create a password" required>
                <button type="button" class="toggle-password" onclick="togglePassword('password', 'toggleIcon1')">
                  <i class="fas fa-eye" id="toggleIcon1"></i>
                </button>
              </div>
              <div class="password-strength" id="passwordStrength"></div>
              <div class="error-message" id="passwordError"></div>
            </div>
          </div>

          <div class="form-row">
            <div class="input-group">
              <label for="confirm-password"><i class="fas fa-lock"></i> Confirm Password</label>
              <div class="password-input">
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                <button type="button" class="toggle-password" onclick="togglePassword('confirm-password', 'toggleIcon2')">
                  <i class="fas fa-eye" id="toggleIcon2"></i>
                </button>
              </div>
              <div class="error-message" id="confirmPasswordError"></div>
            </div>
          </div>

          <div class="form-options">
            <label class="checkbox-container">
              <input type="checkbox" id="terms" required>
              <span class="checkbox-text">
                I agree to the <a href="termsConditions.html" target="_blank">Terms & Conditions</a> and <a href="privacyPolicy.html" target="_blank">Privacy Policy</a>
              </span>
            </label>
          </div>

          <div class="form-buttons">
            <button type="button" class="auth-btn secondary" onclick="window.location.href='home.html'">
              <i class="fas fa-times"></i> Cancel
            </button>
            <button type="submit" class="auth-btn primary" name="signup-btn" onclick="return validateForm()">
              <i class="fas fa-user-plus"></i> Create Account
            </button>
          </div>

          <div class="auth-footer">
            <p>Already have an account? <a href="login.php">Sign in here</a></p>
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
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
        const terms = document.getElementById('terms').checked;

        let isValid = true;

        // Clear previous errors
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        // Validate Name
        if (name === '') {
          document.getElementById('nameError').textContent = 'Please enter your full name.';
          isValid = false;
        }

        // Validate Email
        if (email === '') {
          document.getElementById('emailError').textContent = 'Please enter your email.';
          isValid = false;
        } else if (!isValidEmail(email)) {
          document.getElementById('emailError').textContent = 'Please enter a valid email address.';
          isValid = false;
        }

        // Validate Username
        if (username === '') {
          document.getElementById('usernameError').textContent = 'Please enter a username.';
          isValid = false;
        } else if (username.length < 4) {
          document.getElementById('usernameError').textContent = 'Username must be at least 4 characters long.';
          isValid = false;
        }

        // Validate Password
        if (password === '') {
          document.getElementById('passwordError').textContent = 'Please enter a password.';
          isValid = false;
        } else if (password.length < 6) {
          document.getElementById('passwordError').textContent = 'Password must be at least 6 characters long.';
          isValid = false;
        }

        // Validate Confirm Password
        if (confirmPassword === '') {
          document.getElementById('confirmPasswordError').textContent = 'Please confirm your password.';
          isValid = false;
        } else if (password !== confirmPassword) {
          document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
          isValid = false;
        }

        // Validate Terms
        if (!terms) {
          alert('Please accept the Terms & Conditions to continue.');
          isValid = false;
        }

        return isValid;
      }

      function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
      }

      function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const toggleIcon = document.getElementById(iconId);
        
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

      function checkPasswordStrength(password) {
        const strengthIndicator = document.getElementById('passwordStrength');
        let strength = 0;
        let feedback = '';

        if (password.length >= 6) strength++;
        if (password.match(/[a-z]/)) strength++;
        if (password.match(/[A-Z]/)) strength++;
        if (password.match(/[0-9]/)) strength++;
        if (password.match(/[^a-zA-Z0-9]/)) strength++;

        switch(strength) {
          case 0:
          case 1:
            feedback = 'Weak';
            strengthIndicator.className = 'password-strength weak';
            break;
          case 2:
          case 3:
            feedback = 'Medium';
            strengthIndicator.className = 'password-strength medium';
            break;
          case 4:
          case 5:
            feedback = 'Strong';
            strengthIndicator.className = 'password-strength strong';
            break;
        }

        strengthIndicator.textContent = password ? `Password strength: ${feedback}` : '';
      }

      // Add event listeners
      document.getElementById('password').addEventListener('input', function() {
        checkPasswordStrength(this.value);
      });

      document.getElementById('signup-form').addEventListener('submit', function(e) {
        e.preventDefault();
        if (validateForm()) {
          const submitBtn = this.querySelector('.auth-btn.primary');
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Creating Account...';
          submitBtn.disabled = true;
          this.submit();
        }
      });
    </script>
  </body>
</html>