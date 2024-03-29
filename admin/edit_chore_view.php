<?php
include '../settings/core.php';
include '../action/get_a_chore_action.php';

check_login();

if (isset($_GET['EditID'])) {
    $did = $_GET['EditID'];
    $ret_var = return_a_chore($did);
} else {
    header('Location: ../admin/chore_control_view.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chore</title>
</head>
<body>
    <h1>Edit Chore</h1>
    <form id="editChoreForm" action="../actions/edit_a_chore_action.php" method="post">
        <input type="hidden" name="chore_id" value="<?php echo $ret_var; ?>">
        
        <label for="chore_name">Chore Name:</label><br>
        <input type="text" id="chore_name" name="chore_name" value="<?php echo $second_variable['chore_name']; ?>"><br>
        
        <input type="submit" value="Edit Chore">
    </form>
    </body>
</html>


<script>
    function validateForm() {
        var choreName = document.getElementById("Edit_a_chore").value;
        if (choreName.trim() == "") {
            alert("Chore name must not be empty");
            return false;
        }
        return true;
    }
</script>






















