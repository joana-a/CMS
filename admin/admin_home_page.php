<?php
include_once '../settings/core.php';
check_login();

$user_role_id = get_user_role_id();


if($user_role_id == 1) {
    echo "Welcome, Super-admin!";
} elseif($user_role_id == 2) {
    echo "Welcome, Admin!";
    echo "<p><a href='delete_action.php'>Delete Action</a></p>";
} elseif($user_role_id == 3) {
    header("Location: ../View/home.php");
    exit();
} else {
     echo "Unauthorized access";
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home- Admin</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
    <div class="top-links">
      <a href="chore_control_view.php">Ad A Chore</a>
      <a href="../admin/assign_chore_view.php">Assign Chores</a>
      <a href="../login/logout.php">Logout</a>
  </div>


  <div class="home-container">
    <h1>Welcome to <em>EXPELLIARMUS!</em></h1>

    <div class="statistics-boxes">
        <a href="managechores.html" class="box in-progress">
            <h2>In Progress</h2>
            <p style="color: black;">25 chores</p>
        </a>

        <a href="managechores.html" class="box incomplete">
            <h2>Incomplete</h2>
            <p style="color: black;">10 chores</p>
        </a>

        <a href="managechores.html" class="box completed">
            <h2>Completed</h2>
            <p style="color: black;">50 chores</p>
        </a>
    </div>

    <div class="additional-content">
        <p>Stay organized and efficient with our chore management features. Click on the boxes above to manage your chores.</p>
    </div>
</div>


    <div class="footer">
      &copy; 2024 Expelliarmus - Chore Management Tracker
  </div>

  </body>
</html>
