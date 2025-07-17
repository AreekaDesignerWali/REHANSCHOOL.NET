<?php
// Start session for form feedback
session_start();

// Initialize variables for form handling
$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Basic validation
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required.';
    }
    if (empty($message)) {
        $errors[] = 'Message is required.';
    }

    // If no errors, attempt to save to database (requires db.php)
    if (empty($errors)) {
        try {
            // Include db.php for database connection (commented until db.php is provided)
            // require_once 'db.php';
            // $stmt = $pdo->prepare("INSERT INTO contacts (name, email, message, created_at) VALUES (?, ?, ?, NOW())");
            // $stmt->execute([$name, $email, $message]);
            $success = 'Your message has been sent successfully!';
        } catch (Exception $e) {
            $errors[] = 'Failed to send message. Please try again later.';
        }
    }

    // Store feedback in session for display
    $_SESSION['errors'] = $errors;
    $_SESSION['success'] = $success;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Contact Us</title>
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

        .contact-hero {
            background: url('https://via.placeholder.com/1200x300') no-repeat center/cover;
            padding: 60px 20px;
            text-align: center;
            color: #fff;
        }

        .contact-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .contact-hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
        }

        .contact-details, .contact-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .contact-details h2, .contact-form h2 {
            font-size: 2rem;
            color: #1e3a8a;
            margin-bottom: 20px;
        }

        .contact-details p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form label {
            font-size: 1rem;
            color: #333;
        }

        .contact-form input, .contact-form textarea {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-rounded: 5px;
            width: 100%;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 100px;
        }

        .contact-form button {
            padding: 10px;
            background: #3b82f6;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background: #1e3a8a;
        }

        .error, .success {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .error {
            background: #fee2e2;
            color: #dc2626;
        }

        .success {
            background: #d1fae5;
            color: #059669;
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

            .contact-hero h1 {
                font-size: 1.8rem;
            }

            .contact-hero p {
                font-size: 1rem;
            }

            .contact-details, .contact-form {
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

    <section class="contact-hero">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Reach out with any questions or inquiries.</p>
    </section>

    <section class="contact-content">
        <div class="contact-details">
            <h2>Get in Touch</h2>
            <p><strong>Address:</strong> 123 Education Lane, Knowledge City, PK</p>
            <p><strong>Phone:</strong> +92 123 456 7890</p>
            <p><strong>Email:</strong> info@rehanschool.net</p>
        </div>
        <div class="contact-form">
            <h2>Send a Message</h2>
            <?php if (!empty($_SESSION['errors'])): ?>
                <div class="error">
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <p><?php echo htmlspecialchars($error); ?></p>
                    <?php endforeach; ?>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>
            <?php if (!empty($_SESSION['success'])): ?>
                <div class="success">
                    <p><?php echo htmlspecialchars($_SESSION['success']); ?></p>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            <form method="POST" action="contact.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                <label for="message">Message</label>
                <textarea id="message" name="message"><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                <button type="submit">Send Message</button>
            </form>
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
