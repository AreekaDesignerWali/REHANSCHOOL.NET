<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Curriculum</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #f4f4f9;
        }
        header {
            background: linear-gradient(90deg, #1e3a8a, #3b82f6);
            padding: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #ffd700;
        }
        .curriculum {
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
        }
        .curriculum h1 {
            text-align: center;
            color: #1e3a8a;
            margin-bottom: 30px;
        }
        .curriculum-section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .curriculum-section h2 {
            color: #1e3a8a;
            margin-bottom: 15px;
        }
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 20px;
        }
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .curriculum h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Rehan.Education</div>
            <div class="nav-links">
                <a href="#" onclick="navigate('index.php')">Home</a>
                <a href="#" onclick="navigate('curriculum.php')">Curriculum</a>
                <a href="#" onclick="navigate('courses.php')">Courses</a>
                <a href="#" onclick="navigate('facilitators.php')">Facilitators</a>
                <a href="#" onclick="navigate('founder.php')">Founder's Message</a>
                <a href="#" onclick="navigate('contact.php')">Contact Us</a>
            </div>
        </nav>
    </header>
    <section class="curriculum">
        <h1>Our Innovative Curriculum</h1>
        <div class="curriculum-section">
            <h2>Digital Skills</h2>
            <p>Learn web development, graphic design, and digital marketing to thrive in the digital era.</p>
        </div>
        <div class="curriculum-section">
            <h2>AI Tools Proficiency</h2>
            <p>Master AI-driven tools to create innovative solutions and enhance productivity.</p>
        </div>
        <div class="curriculum-section">
            <h2>Online Teaching Methodologies</h2>
            <p>Develop skills to create engaging online courses and inspire learners worldwide.</p>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Rehan.Education. All rights reserved.</p>
    </footer>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
