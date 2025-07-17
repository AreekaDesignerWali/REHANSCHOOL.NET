<?php
// Start session for potential future use
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Homepage</title>
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

        .hero {
            background: url('https://via.placeholder.com/1200x400') no-repeat center/cover;
            padding: 60px 20px;
            text-align: center;
            color: #fff;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .features, .stats, .testimonials, .articles {
            padding: 40px 20px;
            text-align: center;
        }

        .features h2, .stats h2, .testimonials h2, .articles h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #1e3a8a;
        }

        .feature-grid, .stats-grid, .testimonial-grid, .article-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .feature-card, .stat-card, .testimonial-card, .article-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            transition: transform 0.3s;
        }

        .feature-card:hover, .stat-card:hover, .testimonial-card:hover, .article-card:hover {
            transform: translateY(-5px);
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

            .hero h1 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .feature-card, .stat-card, .testimonial-card, .article-card {
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

    <section class="hero">
        <h1>Welcome to Rehan School</h1>
        <p>Empowering the next generation with AI-enabled education and entrepreneurial skills.</p>
    </section>

    <section class="features">
        <h2>Our Unique Features</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <h3>AI-Enabled Education</h3>
                <p>Leveraging AI to personalize learning experiences.</p>
            </div>
            <div class="feature-card">
                <h3>Holistic Development</h3>
                <p>Focusing on academic, emotional, and social growth.</p>
            </div>
            <div class="feature-card">
                <h3>Entrepreneurial Focus</h3>
                <p>Equipping students with skills to innovate and lead.</p>
            </div>
        </div>
    </section>

    <section class="stats">
        <h2>Our Impact</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="stat-card">
                <h3>1000+</h3>
                <p>Students</p>
            </div>
            <div class="stat-card">
                <h3>5</h3>
                <p>Campuses</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>What People Say</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"Rehan School transformed my child's learning journey!"</p>
                <p>- Parent</p>
            </div>
            <div class="testimonial-card">
                <p>"The curriculum is innovative and inspiring."</p>
                <p>- Student</p>
            </div>
        </div>
    </section>

    <section class="articles">
        <h2>Latest Articles</h2>
        <div class="article-grid">
            <div class="article-card">
                <h3>AI in Education</h3>
                <p>Exploring how AI is shaping the future of learning.</p>
            </div>
            <div class="article-card">
                <h3>Entrepreneurial Skills</h3>
                <p>Why fostering innovation is key for students.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Rehan School. All rights reserved.</p>
    </footer>

    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
