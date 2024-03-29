<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS- Manage Chores</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="manage-chores-assigned-container">
        <h2>Manage Chores Assigned</h2>
        <table>
            <thead>
                <tr>
                    <th>Chore Name</th>
                    <th>Person Assigned</th>
                    <th>Date Assigned</th>
                    <th>Due Date</th>
                    <th>Chore Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mow the Lawn</td>
                    <td>John Doe</td>
                    <td>2024-01-28</td>
                    <td>2024-02-10</td>
                    <td>Pending</td>
                    <td>
                        <button class="edit-button" onclick="editChoreAssignment(1)">Edit</button>
                        <button class="complete-button" onclick="completeChoreAssignment(1)">Complete</button>
                        <button class="incomplete-button" onclick="incompleteChoreAssignment(1)">Incomplete</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>