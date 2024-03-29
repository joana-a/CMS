<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management System- Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="top-links">
        <p style="word-spacing: normal; text-align: left;"><em>EXPELLIARMUS: YOUR PERSONAL CHORE MANAGEMENT SYSTEM</em></p>
    </div>
    
    <div class="login-container">
        <h2>LOGIN</h2>
        <form action="../action/login_user.php" method="post" name="loginForm" id="loginForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
    
            <button type="submit" name="signInButton" id="signInButton" onclick= login()>Sign In</button>
            <!-- <button type="button" onclick="login()">Login</button> -->
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
     
    <div class="footer">
        &copy; 2024 Expelliarmus - Chore Management Tracker
    </div>
  

    <script src="cmsscript.js"></script>
    
</body>
</html>