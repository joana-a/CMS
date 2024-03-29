<?php
include_once '../settings/core.php';
include_once '../settings/connection.php';
require_once '../function/select_assignee_fxn.php';
require_once '../function/select_chore_fxn.php';
require_once '../function/status_fxn.php';
include_once '../function/get_all_assignment_fxn.php';
include_once '../function/assigner_fxn.php';
// include_once '../action/delete_assignment_action.php';

// check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS- Chore Assignment</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="chore-assignment-container">
        <h2>Chore Assignment</h2>
    
        
        <form action="../action/assign_chore_action.php" method="post" name="choreAssignmentForm" id="choreAssignmentForm">
            <label for="assignPerson">Assign Person:</label>
            <select id="assignPerson" name="assignPerson" required>
            <?php
                foreach($aresults as $x){
                    echo "<option value=".$x['pid'].">".$x['fname']. " ". $x['lname']."</option>";
                }
                ?>
                
            </select>
    
            <label for="assignChore">Assign Chore:</label>
            <select id="assignChore" name="assignChore" required>
            <?php
                foreach($cresults as $x){
                    echo "<option value=".$x['cid'].">".$x['chorename']."</option>";
                }
                ?>
            </select>

            <label for="chorestatus">Status:</label>
            <select id="chorestatus" name="chorestatus" required>
            <?php
                foreach($sresults as $x){
                    echo "<option value=".$x['sid'].">".$x['sname']."</option>";
                }
                ?>
            </select>
    
            <label for="assignedDate">Date Assigned:</label>
            <input type="date" id="assignedDate" name="assignedDate" required>
    
            <label for="dueDate">Due Date:</label>
            <input type="date" id="dueDate" name="dueDate" required>

            <label for="assigner">Assigned By:</label>
            <select id="assigner" name="assigner" required>
            <?php
                foreach($assresults as $x){
                    echo "<option value=".$x['pid'].">".$x['fname']. " ". $x['lname']."</option>";
                }
                ?>
                
            </select>
    
            <button type="submit" name="assignChoreButton" id="assignChoreButton">Assign Chore</button>
        </form>
    </div>

    <table>
    <thead>
        <tr>
            <th>Assignment ID</th>
            <th>Chore ID</th>
            <th>Status ID</th>
            <th>Date Assigned</th>
            <th>Date Due</th>
            <th>Last Updated</th>
            <th>Assigned By:</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($assignments as $assignment): ?>
        <tr>
            <td><?php echo $assignment['assignmentid']; ?></td>
            <td><?php echo $assignment['chorename']; ?></td>
            <td><?php echo $assignment['sname']; ?></td>
            <td><?php echo $assignment['date_assign']; ?></td>
            <td><?php echo $assignment['date_due']; ?></td>
            <td><?php echo $assignment['last_updated']; ?></td>
            <td><?php echo $assignment['fname'] . " " . $assignment['lname']; ?></td>
            <td><a href="../action/delete_assignment_action.php?id=<?php echo $assignment['assignmentid']; ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>