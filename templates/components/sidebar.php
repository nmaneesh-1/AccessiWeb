 
<?php include __DIR__ . '/meta_links.php'; ?>
<?php include __DIR__ . '/header.php'; ?>

<?php 
$username="Maneesh";
?>
<aside class="side-bar">
<div class="side-bar-container">  <p class="user-name"><img class="profile-img" src="../assets/images/profile.jpg" alt="profile"> <?php echo $username ?></p>

 <ul class="dashboard-links">
    <li id="overview"><a href="#" data-page="../templates/_overview.php"><ion-icon class="side-bar-icon" name="grid-outline"></ion-icon>Dashboard</a></li>
    <li id="analysis"><a href="#" data-page="../templates/_analytics_history.php"><ion-icon class="side-bar-icon" name="time-outline"></ion-icon>Analysis History</a></li>
    <li id="reports"><a href="#" data-page="../templates/_reports.php"><ion-icon class="side-bar-icon" name="document-text-outline"></ion-icon>Reports</a></li>
    <li id="settings"><a href="#" data-page="../templates/_settings.php"><ion-icon class="side-bar-icon" name="settings-outline"></ion-icon>Settings</a></li>
</ul>
  <button class="logout-btn"><ion-icon class="logout-icon" name="arrow-back-outline"></ion-icon>Logout</button>
</div>
</aside>

