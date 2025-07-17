<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Courses</title>
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
        .courses {
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .course-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .course-card h3 {
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
            .courses h1 {
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
    <section class="courses">
        <h1>Our Courses</h1>
        <div class="course-card">
            <h3>Web Development Mastery</h3>
            <p>Learn HTML, CSS, JavaScript, and PHP to build modern websites.</p>
        </div>
        <div class="course-card">
            <h3>AI for Beginners</h3>
            <p>Understand AI concepts and tools to create intelligent solutions.</p>
        </div>
        <div class="course-card">
            <h3>Online Teaching Essentials</h3>
            <p>Master the art of creating and delivering online courses.</p>
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
