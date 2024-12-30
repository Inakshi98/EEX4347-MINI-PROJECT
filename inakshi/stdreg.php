<?php
include('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $course = $_POST['course'];
    $email=$_POST['email'];

    // Insert data into the students table
    $query = "INSERT INTO students (nic, name, address, tel, course, email) VALUES ('$nic', '$name', '$address', '$tel', '$course','$email')";
    
    if (mysqli_query($conn, $query)) {
        $successMessage = "Student registered successfully!";
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
    <title>Student Registration - ODL SYSTEM </title>
    <link rel="stylesheet" href="rg.css">
</head>
<body>
    <nav class="navbar">
        <a href="welcome.php" class="logo">ODL</a>
        <a href="stdlogin.php" class="home-btn">Login</a>
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
        <h2>Registration Form</h2>
        <h2>Student</h2>
        <form action="stdreg.php" method="POST">
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

                <div class="form-group">
                    <label for="tel">Telephone Number</label>
                    <input type="text" id="tel" name="tel" required 
                           placeholder="Enter your telephone number">
                </div>

                <div class="form-group">
                    <label for="course">Course</label>
                <select id="course" name="course" required>
    <option value="">Select</option>
    <option value="Engineering">B.Tech Engineering</option>
    <option value="BSc IT">BSc IT</option>
    <option value="Business Management">Business Management</option>
    <option value="Natural Science">Natural Science</option>
   
            </select>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required 
                           placeholder="Enter your address">
                </div>
            </div>

            <button type="submit" id="reg">Sumbit</button>
        </form>
    </div>
</body>
</html>

