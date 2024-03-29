<?php
require "../function/select_role.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management System - Sign Up</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    
    
    <div class="signup-container">
        <h2>Signup</h2>
        <form action="../action/register_user.php" method="post" name="signupForm" id="signupForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
    
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
    
            <label>Gender:</label>
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="0" required>
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="1" required>
    
            <label for="familyRole">Family Role:</label>
            <select id="familyRole" name="familyRole" required>
                <option value="0">Select</option>
                <?php
                foreach($results as $x){
                    echo "<option value=".$x['fid'].">".$x['fam_name']."</option>";
                }
                ?>
            </select>
    
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" placeholder="Select your date of birth" required>
    
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
    
            <label for="confirmPassword">Retype Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Retype your password" required>
    
            <button type="submit" name="registerButton" id="registerButton">Register</button>
        </form>
        <p>Already have an account? <a href="login.html">Login</a></p>
    </div>
    
    
    <script src="cmsscript.js"></script>
    
</body>
</html>