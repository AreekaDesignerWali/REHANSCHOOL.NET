<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Email configuration
    $to = "info@rehan.education"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        $success = "Message sent successfully!";
    } else {
        $error = "Failed to send message. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Contact Us</title>
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
        .contact {
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .contact-info {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .contact-form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .contact-form h2 {
            color: #1e3a8a;
            margin-bottom: 20px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form button {
            background-color: #ffd700;
            color: #1e3a8a;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #e6c200;
        }
        .success, .error {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
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
            .contact {
                grid-template-columns: 1fr;
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
    <section class="contact">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Address: 123 Digital Lane, London, UK</p>
            <p>Phone: <a href="tel:+447418359852">+44 7418 359852</a></p>
            <p>Email: <a href="mailto:info@rehan.education">info@rehan.education</a></p>
            <p>Follow us: 
                <a href="https://facebook.com" target="_blank">Facebook</a> | 
                <a href="https://instagram.com" target="_blank">Instagram</a> | 
                <a href="https://x.com" target="_blank">Twitter/X</a>
            </p>
        </div>
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <?php if (isset($success)) { echo "<div class='success'>$success</div>"; } ?>
            <?php if (isset($error)) { echo "<div class='error'>$error</div>"; } ?>
            <form method="post" action="contact.php">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>
    <footer>
        <p>© 2025 Rehan.Education. All rights reserved.</p>
    </footer>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
