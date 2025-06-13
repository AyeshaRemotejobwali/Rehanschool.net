<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $message]);
    $success = "Message sent successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Rehan School</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }
        header {
            background: linear-gradient(90deg, #2c3e50, #3498db);
            color: #fff;
            padding: 1rem 0;
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
            padding: 0 20px;
        }
        nav .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #f1c40f;
        }
        .section {
            max-width: 1200px;
            margin: 80px auto 3rem;
            padding: 0 20px;
        }
        .section h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            color: #2c3e50;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        .contact-info, .contact-form {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contact-form form {
            display: flex;
            flex-direction: column;
        }
        .contact-form input, .contact-form textarea {
            margin-bottom: 1rem;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .contact-form button {
            background: #3498db;
            color: #fff;
            border: none;
            padding: 0.8rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .contact-form button:hover {
            background: #2c3e50;
        }
        .success {
            color: green;
            text-align: center;
            margin-bottom: 1rem;
        }
        footer {
            background: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                background: #2c3e50;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                display: none;
            }
            nav ul.active {
                display: flex;
            }
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Rehan School</div>
            <ul id="nav-links">
                <li><a href="#" onclick="navigate('index.php')">Home</a></li>
                <li><a href="#" onclick="navigate('curriculum.php')">Curriculum</a></li>
                <li><a href="#" onclick="navigate('facilitators.php')">Facilitators</a></li>
                <li><a href="#" onclick="navigate('contact.php')">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="section">
        <h2>Contact Us</h2>
        <?php if (isset($success)): ?>
            <p class="success"><?php echo $success; ?></p>
        <?php endif; ?>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Our Contact Details</h3>
                <p><strong>Address:</strong> 123 Innovation Street, Education City, PK</p>
                <p><strong>Phone:</strong> +92 123 456 7890</p>
                <p><strong>Email:</strong> info@rehanschool.net</p>
            </div>
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
