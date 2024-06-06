<?php include ('./conn/conn.php') ?>

<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration & Login</title>
    <link rel="stylesheet"href="style.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   
</head>
<body>

    <header>
      <center>
      <img id="ksrct_logo" src="l4.png" alt="K.S.Rangasamy College of Technology"
      height="70" width="150">
      </center>
      </header>
    
    <div class="main">
      

        <!-- Login Area -->
        <div class="login" id="loginForm">
            <h1 class="text-center">Login</h1>
            <div class="login-form">
                <form action="./endpoint/login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" placeholder="Enter your username" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
                    </div>
                    <br>
                    <p class="registrationForm" onclick="showRegistrationForm()">No Account? Register Here.</p>
                    <br>
                    <button type="submit" class="btn btn-dark login-btn form-control">Login</button>
                </form>
            </div>
        </div>


        <!-- Registration Area -->
        <div class="registration" id="registrationForm">
            <h1 class="text-center">Sign up for free</h1>
            <div class="registration-form">
            <form action="./endpoint/add-user.php" method="POST">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="first_name">
                    </div>
                    <div class="col-6">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="last_name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-5">
                        <label for="contactNumber">Contact Number:</label>
                        <input type="number" class="form-control" id="contactNumber" name="contact_number" maxlength="11">
                    </div>
                    <div class="col-7">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="registerUsername">Username:</label>
                    <input type="text" class="form-control" id="registerUsername" name="username">
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password:</label>
                    <input type="password" class="form-control" id="registerPassword" name="password">
                </div>
                <p class="registrationForm" onclick="showLoginForm()"><- Back</p>
                <button type="submit" class="btn btn-dark login-register form-control">Sign up</button>
            </form>

            </div>

        </div>

    </div>

    <script>
        // Constant variables
        const loginForm = document.getElementById('loginForm');
        const registrationForm = document.getElementById('registrationForm');

        // Hide registration form
        registrationForm.style.display = "none";


        function showRegistrationForm() {
            registrationForm.style.display = "";
            loginForm.style.display = "none";
        }

        function showLoginForm() {
            registrationForm.style.display = "none";
            loginForm.style.display = "";
        }

    </script>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
<footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>Movies</h3>
        <ul>
          <li><a href="#">New Releases</a></li>
          <li><a href="#">Popular</a></li>
          <li><a href="#">Trending</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>TV Shows</h3>
        <ul>
          <li><a href="#">Latest Episodes</a></li>
          <li><a href="#">Top Rated</a></li>
          <li><a href="#">Genres</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Company</h3>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Follow Us</h3>
        <ul>
          <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
          <li><a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
          <li><a href="#" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 Movie Streaming Site. All rights reserved.</p>
    </div>
  </footer>
</html>