<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMS- Settings</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
    <div class="top-links">
      <a href="home.html">Home</a>
      <a href="user-profile.html">User Profile</a>
      <a href="managechores.html">Chores</a>
      <a href="deadlines.html">Deadlines</a>
      <a href="leaderboard.html">Leaderboard</a>
      <a href="managechores.html">ChoreManagement</a>
      <a href="choreassignment.html">ChoreAssignment</a>
      <a href="addchores.html">AddChores</a>
      <a href="managechoresassigned.html">Leaderboard</a>
  </div>

  <div class="content-container settings-container">
    <h2>Settings</h2>
    <form id="settingsForm">
        <label for="themeColor">Select Theme Color:</label>
        <select id="themeColor" name="themeColor">
            <option value="pink">Pink</option>
            <option value="lightpink">Light Pink</option>
            <option value="deeppink">Deep Pink</option>
        </select>

        <label for="notificationToggle">Enable Notifications:</label>
        <input type="checkbox" id="notificationToggle" name="notificationToggle">

        <button type="button" onclick="saveSettings()">Save</button>
    </form>
</div>
    
    <div class="footer">
      &copy; 2024 Expelliarmus - Chore Management Tracker
  </div>

  </body>
</html>
