<?php
require "../settings/core.php";

check_login();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS- Add Chores</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="add-chore-container">
        <h2>Add Chore</h2>
    
    
        <form action="../action/add_chore.php" method="post" name="addChoreForm" id="addChoreForm">
            <label for="choreName">Chore Name:</label>
            <input type="text" id="choreName" name="choreName" placeholder="Enter chore name" required>
    
            
    
            <button type="submit" name="addChoreButton" id="addChoreButton">Add</button>
        </form>
    
        
        <?php include('../function/chore_fxn.php'); ?>

    
        <h3>ALL CHORES</h3>
    <table border="1">
        <tr>
            <th>Chore ID</th>
            <th>Chore</th>
            <th>Action</th>
        </tr>
        <?php
        allchorestable();
        ?>
    </table>
</body>
</html>