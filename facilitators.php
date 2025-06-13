<?php
require_once 'db.php';

$stmt = $conn->query("SELECT name, role, bio, email, qualification, experience_years, twitter, linkedin FROM facilitators WHERE status = 'active'");
$facilitators = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitators - Rehan School</title>
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
        .facilitator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        .facilitator-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .facilitator-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        .facilitator-card p {
            margin-bottom: 0.5rem;
        }
        .social-links a {
            margin: 0 10px;
            color: #3498db;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .social-links a:hover {
            color: #f1c40f;
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
                <li><a href="#" onclick="navigate('facilitators.php')"> --

System: It looks like the response was cut off, likely due to a processing limit or interruption. I'll complete the `facilitators.php` file, ensuring it incorporates the updated `facilitators` table with the new fields (`email`, `qualification`, `experience_years`) and displays the four facilitators as requested. The artifact will maintain the same `artifact_id` as the previous `facilitators.php` to reflect the update, as per your instructions. Additionally, I'll ensure the SQL table provided earlier is fully utilized and the file is error-free, maintaining the professional CSS design and JavaScript navigation.

### Updated facilitators.php
This file queries the enhanced `facilitators` table and displays the four facilitators with their name, role, bio, email, qualification, experience years, and social media links. The CSS remains consistent with the previous design for a cohesive look across the Rehan School clone.

<xaiArtifact artifact_id="e8c3795f-4ede-499d-b025-b4115d9eeaf2" artifact_version_id="51d73248-5098-4cf6-8a5d-d7ea74b3e76b" title="facilitators.php" contentType="text/php">
<?php
require_once 'db.php';

$stmt = $conn->query("SELECT name, role, bio, email, qualification, experience_years, twitter, linkedin FROM facilitators WHERE status = 'active'");
$facilitators = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitators - Rehan School</title>
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
        .facilitator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        .facilitator-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .facilitator-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        .facilitator-card p {
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        .social-links a {
            margin: 0 10px;
            color: #3498db;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .social-links a:hover {
            color: #f1c40f;
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
        <h2>Our Facilitators</h2>
        <div class="facilitator-grid">
            <?php foreach ($facilitators as $facilitator): ?>
                <div class="facilitator-card">
                    <img src="https://source.unsplash.com/random/100x100/?portrait" alt="Facilitator">
                    <h3><?php echo htmlspecialchars($facilitator['name']); ?></h3>
                    <p><strong>Role:</strong> <?php echo htmlspecialchars($facilitator['role']); ?></p>
                    <p><strong>Qualification:</strong> <?php echo htmlspecialchars($facilitator['qualification']); ?></p>
                    <p><strong>Experience:</strong> <?php echo htmlspecialchars($facilitator['experience_years']); ?> years</p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($facilitator['email']); ?></p>
                    <p><?php echo htmlspecialchars($facilitator['bio']); ?></p>
                    <div class="social-links">
                        <?php if (!empty($facilitator['twitter'])): ?>
                            <a href="<?php echo htmlspecialchars($facilitator['twitter']); ?>" target="_blank">Twitter</a>
                        <?php endif; ?>
                        <?php if (!empty($facilitator['linkedin'])): ?>
                            <a href="<?php echo htmlspecialchars($facilitator['linkedin']); ?>" target="_blank">LinkedIn</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <footer>
        <p>© 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
