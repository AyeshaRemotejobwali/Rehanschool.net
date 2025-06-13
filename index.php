<?php
require_once 'db.php';

// Query for testimonials
try {
    $stmt = $conn->query("SELECT name, message FROM testimonials ORDER BY created_at DESC LIMIT 3");
    $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $testimonials_error = "Error fetching testimonials: " . $e->getMessage();
}

// Query for facilitators
try {
    $stmt_facilitators = $conn->query("SELECT name, role FROM facilitators WHERE status = 'active' LIMIT 4");
    $facilitators = $stmt_facilitators->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $facilitators_error = "Error fetching facilitators: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Empowering Future Innovators</title>
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
        .hero {
            background: url('https://source.unsplash.com/random/1920x1080/?education') no-repeat center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            margin-top: 60px;
        }
        .hero-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.5rem;
        }
        .section {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 20px;
        }
        .features, .stats, .testimonials, .articles, .facilitators {
            margin-bottom: 3rem;
        }
        .features h2, .stats h2, .testimonials h2, .articles h2, .facilitators h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            color: #2c3e50;
        }
        .feature-grid, .stats-grid, .article-grid, .facilitator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        .feature-card, .stats-card, .article-card, .facilitator-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .facilitator-card h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        .facilitator-card p {
            font-size: 0.9rem;
            color: #555;
        }
        .testimonial-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 1rem;
        }
        .error {
            color: red;
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
            .hero h1 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 1.2rem;
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
    <section class="hero">
        <div class="hero-content">
            <h1>Empowering Future Innovators</h1>
            <p>Rehan School: Where AI meets holistic education and entrepreneurial spirit.</p>
        </div>
    </section>
    <section class="section features">
        <h2>Our Unique Features</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <h3>AI-Enabled Education</h3>
                <p>Leveraging artificial intelligence to personalize learning experiences.</p>
            </div>
            <div class="feature-card">
                <h3>Holistic Development</h3>
                <p>Fostering intellectual, emotional, and social growth.</p>
            </div>
            <div class="feature-card">
                <h3>Entrepreneurial Focus</h3>
                <p>Equipping students with skills to innovate and lead.</p>
            </div>
        </div>
    </section>
    <section class="section stats">
        <h2>Our Impact</h2>
        <div class="stats-grid">
            <div class="stats-card">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="stats-card">
                <h3>1000+</h3>
                <p>Students</p>
            </div>
            <div class="stats-card">
                <h3>5</h3>
                <p>Campuses</p>
            </div>
        </div>
    </section>
    <section class="section testimonials">
        <h2>Testimonials</h2>
        <?php if (isset($testimonials_error)): ?>
            <p class="error"><?php echo $testimonials_error; ?></p>
        <?php elseif (empty($testimonials)): ?>
            <p class="error">No testimonials found.</p>
        <?php else: ?>
            <div class="testimonial-grid">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="testimonial-card">
                        <p>"<?php echo htmlspecialchars($testimonial['message']); ?>"</p>
                        <h4>- <?php echo htmlspecialchars($testimonial['name']); ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
    <section class="section articles">
        <h2>Latest Articles</h2>
        <div class="article-grid">
            <div class="article-card">
                <h3>New AI Curriculum Launched</h3>
                <p>Discover how our latest curriculum integrates AI to enhance learning.</p>
            </div>
            <div class="article-card">
                <h3>Student Startup Success</h3>
                <p>Our students win national entrepreneurship competition.</p>
            </div>
        </div>
    </section>
    <section class="section facilitators">
        <h2>Meet Our Facilitators</h2>
        <?php if (isset($facilitators_error)): ?>
            <p class="error"><?php echo $facilitators_error; ?></p>
        <?php elseif (empty($facilitators)): ?>
            <p class="error">No facilitators found. Please ensure the facilitators table is populated.</p>
        <?php else: ?>
            <div class="facilitator-grid">
                <?php foreach ($facilitators as $facilitator): ?>
                    <div class="facilitator-card">
                        <h3><?php echo htmlspecialchars($facilitator['name']); ?></h3>
                        <p><?php echo htmlspecialchars($facilitator['role']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
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
