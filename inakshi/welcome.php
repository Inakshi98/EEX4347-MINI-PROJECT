<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open University Sri Lanka</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-image: url('img/04.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        /* Navigation */
        .nav-container {
            background: rgba(243, 237, 237, 0.38);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
    color: #030303;
    font-size: 1.5rem;
    font-weight: bold;
    text-decoration: none;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.3s;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: #2d859b;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/04.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInDown 1s ease;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Buttons */
        .btn-container {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        

        .btn-secondary {
            background-color:rgba(27, 203, 247, 0.81);
            color: white;
        }

        

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 1rem;
            }

            .nav-links {
                margin-top: 1rem;
                gap: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .quick-links {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <div class="nav-container">
        <nav class="navbar">
            <a href="welcome.php" class="logo">ODL</a>
            <div class="nav-links">
                
                <a href="adminlogin.php" >ADMIN</a>
                
            </div>
        </nav>
    </div>
    <section class="hero">
        <div class="hero-content">
            <h1>OPEN UNIVERSITY SRI LANKA</h1>
            <p>Welcome to open and distance learning system</p>
            <p> Click Here</p>
            <div class="btn-container">
                
                
                <a href="stdlogin.php" class="btn btn-secondary"> Student Login </a>
            </div>
        </div>
    </section>
</body>
</html>