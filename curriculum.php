<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum - Rehan School</title>
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
        .curriculum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .curriculum-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        <h2>Our Innovative Curriculum</h2>
        <div class="curriculum-grid">
            <div class="curriculum-card">
                <h3>AI-Integrated Learning</h3>
                <p>Our curriculum uses AI to tailor lessons to individual student needs, enhancing engagement and outcomes.</p>
            </div>
            <div class="curriculum-card">
                <h3>Soft Skills Training</h3>
                <p>Emphasis on communication, teamwork, and leadership to prepare students for real-world challenges.</p>
            </div>
            <div class="curriculum-card">
                <h3>Entrepreneurial Skills</h3>
                <p>Courses on innovation, problem-solving, and business development to foster future leaders.</p>
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
