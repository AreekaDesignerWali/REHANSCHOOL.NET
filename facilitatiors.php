<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Facilitators</title>
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
        .facilitators {
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .facilitator-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .facilitator-card h3 {
            color: #1e3a8a;
            margin-bottom: 10px;
        }
        .facilitator-card a {
            color: #3b82f6;
            text-decoration: none;
        }
        .facilitator-card a:hover {
            text-decoration: underline;
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
            .facilitators h1 {
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
    <section class="facilitators">
        <h1>Our Facilitators</h1>
        <div class="facilitator-card">
            <h3>John Doe</h3>
            <p>Expert in AI and Machine Learning</p>
            <p><a href="https://linkedin.com" target="_blank">LinkedIn</a></p>
        </div>
        <div class="facilitator-card">
            <h3>Jane Smith</h3>
            <p>Specialist in Digital Marketing</p>
            <p><a href="https://linkedin.com" target="_blank">LinkedIn</a></p>
        </div>
        <div class="facilitator-card">
            <h3>Mike Johnson</h3>
            <p>Online Teaching Expert</p>
            <p><a href="https://linkedin.com" target="_blank">LinkedIn</a></p>
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
