<?php
// Start session for potential future use
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Facilitators</title>
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

        .facilitators-hero {
            background: url('https://via.placeholder.com/1200x300') no-repeat center/cover;
            padding: 60px 20px;
            text-align: center;
            color: #fff;
        }

        .facilitators-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .facilitators-hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .facilitators-content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .facilitators-content h2 {
            font-size: 2rem;
            color: #1e3a8a;
            margin-bottom: 20px;
            text-align: center;
        }

        .facilitators-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .facilitator-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }

        .facilitator-card:hover {
            transform: translateY(-5px);
        }

        .facilitator-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .facilitator-card h3 {
            font-size: 1.5rem;
            color: #3b82f6;
            margin-bottom: 10px;
        }

        .facilitator-card p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .social-links a {
            color: #3b82f6;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
        }

        .social-links a:hover {
            color: #1e3a8a;
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

            .facilitators-hero h1 {
                font-size: 1.8rem;
            }

            .facilitators-hero p {
                font-size: 1rem;
            }

            .facilitator-card {
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

    <section class="facilitators-hero">
        <h1>Meet Our Facilitators</h1>
        <p>Our dedicated educators are passionate about shaping the future of our students.</p>
    </section>

    <section class="facilitators-content">
        <h2>Our Expert Team</h2>
        <p>At Rehan School, our facilitators bring diverse expertise and a commitment to innovative teaching.</p>
        <div class="facilitators-grid">
            <div class="facilitator-card">
                <img src="https://via.placeholder.com/100" alt="Facilitator 1">
                <h3>Dr. Sarah Khan</h3>
                <p>AI Education Specialist with over 15 years of experience.</p>
                <div class="social-links">
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
            <div class="facilitator-card">
                <img src="https://via.placeholder.com/100" alt="Facilitator 2">
                <h3>Prof. Ahmed Malik</h3>
                <p>Entrepreneurship Mentor and Business Strategist.</p>
                <div class="social-links">
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
            <div class="facilitator-card">
                <img src="https://via.placeholder.com/100" alt="Facilitator 3">
                <h3>Ms. Ayesha Siddiqui</h3>
                <p>Soft Skills Trainer with a focus on leadership development.</p>
                <div class="social-links">
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                </div>
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
