<?php
session_start();


if (!isset($_SESSION['email'])) {
    header("Location: adminlogin.php"); 
    exit();
}


$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Student Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dash.css">
</head>
<body>
<nav class="navbar">
        <a href="welcome.php" class="logo">ODL</a>
        <a href="adminlogin.php" class="home-btn">Back </a>
    </nav>
    <div class="container">
        <div class="card">
            <div class="user-welcome">
                WELCOME TO ADMIN DASHBOARD, <span class="highlight"><?php echo $username; ?></span>
            </div>
            <p style="text-align: center; margin-bottom: 2rem;">
                What would you like to do today?
            </p>
            
            <form action="update_delete.php" method="GET">
            <button type="submit" class="btn" style="background:blue;color:white;">
                    Update/Delete Student
                </button>
            </form>
            
            <form action="search.php" method="post">
                <button type="submit" class="btn" style="background:blue;color:white;">
                    Search Student
                </button>
            </form>

            <form action="stdashboard.php" method="post">
                <button type="submit" class="btn" style="background:blue;color:white;">
                    Go To Student Dashboard
                </button>
            </form>
            
            
            <form action="logout.php" method="POST">
            <button type="submit" class="btn" style="background:rgb(115, 23, 23);color:white;">
                    Logout
                </button>
            </form>
           
        </div>
    </div>
</body>
</html>
