<?php
include('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $email=$_POST['email'];

    // Insert data into the students table
    $query = "INSERT INTO admins (nic, name, email) VALUES ('$nic', '$name','$email')";
    
    if (mysqli_query($conn, $query)) {
        $successMessage = "Admin registered successfully!";
    } else {
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration - ODL SYSTEM </title>
    <link rel="stylesheet" href="rg.css">
</head>
<body>
    <nav class="navbar">
        <a href="welcome.php" class="logo">ODL</a>
        <a href="adminlogin.php" class="home-btn">BACK TO LOGIN PAGE</a>
    </nav>

    <?php if (isset($successMessage)): ?>
        <div class="alert alert-success">
            <?php echo $successMessage; ?>
        </div>
    <?php elseif (isset($errorMessage)): ?>
        <div class="alert alert-error">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>

    <div class="register-form">
        <h2>Admin Registration</h2>
        <form action="adreg.php" method="POST">
            <div class="form-grid">
                <div class="form-group">
                    <label for="nic">NIC Number</label>
                    <input type="text" id="nic" name="nic" required 
                           placeholder="Enter your NIC number">
                </div>

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required 
                           placeholder="Enter your full name">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required 
                           placeholder="Enter your email">
                </div>

   
            </div>

            <button type="submit" id="reg">Submit </button>
           
        </form>
    </div>
</body>
</html>

