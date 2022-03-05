<?php
//include auth_session.php file on all user panel pages
include("verify.php");
?>
<!DOCTYPE html>
<html>
<head>
    <
    <title>Dashboard - Client area</title>
    
</head>
<body>

        <p>Hey, <?php echo $_SESSION['username']; ?>
    
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    
</body>
</html>