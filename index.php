<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Home</title>
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
        .hero {
            background: url('https://images.unsplash.com/photo-1516321310764-898d86c29e57') no-repeat center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero p {
            font-size: 20px;
            max-width: 600px;
            margin-bottom: 30px;
        }
        .cta-button {
            background-color: #ffd700;
            color: #1e3a8a;
            padding: 15px 30px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #e6c200;
        }
        .features {
            max-width: 1200px;
            margin: 50px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .feature-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .feature-card h3 {
            margin-bottom: 15px;
            color: #1e3a8a;
        }
        .contact-info {
            background: #1e3a8a;
            color: white;
            padding: 50px;
            text-align: center;
        }
        .contact-info a {
            color: #ffd700;
            text-decoration: none;
        }
        .contact-info a:hover {
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
            .hero h1 {
                font-size: 32px;
            }
            .hero p {
                font-size: 16px;
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
    <section class="hero">
        <div>
            <h1>Digital Mastery for a Connected World</h1>
            <p>Empowering teens to unleash their digital potential and impact 10 million lives through AI-enabled education.</p>
            <a href="#" class="cta-button" onclick="navigate('curriculum.php')">Explore Curriculum</a>
        </div>
    </section>
    <section class="features">
        <div class="feature-card">
            <h3>AI-Enabled Education</h3>
            <p>Learn cutting-edge AI tools to stay ahead in the digital age.</p>
        </div>
        <div class="feature-card">
            <h3>Digital Skills Acquisition</h3>
            <p>Master essential digital skills for real-world applications.</p>
        </div>
        <div class="feature-card">
            <h3>Online Teaching Proficiency</h3>
            <p>Develop skills to teach and inspire others online.</p>
        </div>
    </section>
    <section class="contact-info">
        <h2>Contact Us</h2>
        <p>Call/WhatsApp: <a href="tel:+447418359852">+44 7418 359852</a></p>
        <p>Follow us: 
            <a href="https://facebook.com" target="_blank">Facebook</a> | 
            <a href="https://instagram.com" target="_blank">Instagram</a> | 
            <a href="https://x.com" target="_blank">Twitter/X</a>
        </p>
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
