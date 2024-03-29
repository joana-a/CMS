<?php
require "../action/get_all_chores_action.php";



function allchorestable() {
    $var_data= view_chores();
    foreach ($var_data as $chore) {
        echo "
        <tr>
            <td>".$chore["cid"]."</td>
            <td>".$chore["chorename"]."</td>
            <td>
                <a href='../admin/edit_chore_view.php?EditID=". $chore['cid']."'>Edit</a>
                <a href='../action/delete_chore_action.php?DeleteID=". $chore['cid']."'>Delete</a>
            </td>
        </tr>
        ";
    }

}


    