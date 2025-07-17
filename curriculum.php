<?php
// Start session for potential future use
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Curriculum</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        .header {
            background: linear-gradient(90deg, #1e3a8a, #3b82f6);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar ul {
            list-style: none;
            display: flex;
        }

        .navbar ul li {
            margin-left: 20px;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 10px;
            transition: background 0.3s;
        }

        .navbar ul li a:hover {
            background: #2563eb;
            border-radius: 5px;
        }

        .curriculum-hero {
            background: url('https://via.placeholder.com/1200x300') no-repeat center/cover;
            padding: 60px 20px;
            text-align: center;
            color: #fff;
        }

        .curriculum-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .curriculum-hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .curriculum-content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .curriculum-content h2 {
            font-size: 2rem;
            color: #1e3a8a;
            margin-bottom: 20px;
            text-align: center;
        }

        .curriculum-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .curriculum-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            transition: transform 0.3s;
        }

        .curriculum-card:hover {
            transform: translateY(-5px);
        }

        .curriculum-card h3 {
            font-size: 1.5rem;
            color: #3b82f6;
            margin-bottom: 10px;
        }

        .curriculum-card p {
            font-size: 1rem;
        }

        .footer {
            background: #1e3a8a;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
            }

            .navbar ul {
                flex-direction: column;
                align-items: center;
            }

            .navbar ul li {
                margin: 10px 0;
            }

            .curriculum-hero h1 {
                font-size: 1.8rem;
            }

            .curriculum-hero p {
                font-size: 1rem;
            }

            .curriculum-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">Rehan School</div>
        <nav class="navbar">
            <ul>
                <li><a href="javascript:void(0)" onclick="navigate('index.php')">Home</a></li>
                <li><a href="javascript:void(0)" onclick="navigate('curriculum.php')">Curriculum</a></li>
                <li><a href="javascript:void(0)" onclick="navigate('facilitators.php')">Facilitators</a></li>
                <li><a href="javascript:void(0)" onclick="navigate('contact.php')">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="curriculum-hero">
        <h1>Our Innovative Curriculum</h1>
        <p>Discover a learning experience that blends technology, creativity, and real-world skills.</p>
    </section>

    <section class="curriculum-content">
        <h2>Why Our Curriculum Stands Out</h2>
        <p>At Rehan School, our curriculum is designed to prepare students for the future by integrating cutting-edge technology with essential soft skills. We focus on fostering critical thinking, creativity, and entrepreneurial mindsets through hands-on learning and AI-driven personalization.</p>
        <div class="curriculum-grid">
            <div class="curriculum-card">
                <h3>AI-Integrated Learning</h3>
                <p>Our curriculum leverages AI to tailor educational content to each student's needs, ensuring personalized growth and mastery.</p>
            </div>
            <div class="curriculum-card">
                <h3>Soft Skills Development</h3>
                <p>We emphasize communication, teamwork, and problem-solving to equip students for success in any career path.</p>
            </div>
            <div class="curriculum-card">
                <h3>Entrepreneurial Training</h3>
                <p>Students learn to innovate, take risks, and develop business acumen through practical projects and mentorship.</p>
            </div>
            <div class="curriculum-card">
                <h3>Technology-Driven Approach</h3>
                <p>From coding to robotics, our courses integrate modern tech to prepare students for a digital world.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>© 2025 Rehan School. All rights reserved.</p>
    </footer>

    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
