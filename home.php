<?php
session_start();

// Redirect users who are not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SMC</title>
    <link rel="stylesheet" href="static/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Social Media Campaigns (SMC)</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Pages</a>
                    <div class="dropdown-content">
                        <a href="information.php">Information</a>
                        <a href="popular_apps.php">Popular Apps</a>
                        <a href="parents_help.php">Parents Help</a>
                        <a href="livestreaming.php">Livestreaming</a>
                        <a href="legislation.php">Legislation</a>
                    </div>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li><?php if (!isset($_SESSION['user_id'])) : ?>
                    <a href="register.php">Register</a>
                    <a href="login.php">Login</a>
                <?php else : ?>
                    <a href="logout.php">Logout</a>
                <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>
    <div class="hero">
        <div>
            <h1>Welcome to Social Media Campaigns</h1>
            <p>Stay safe online with our tips and resources.</p>
            <form action="search.php" method="GET">
                <input type="text" name="q" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <main class="container">
        <section class="features">
            <div class="feature">
                <img src="static/images/feature1.png" alt="Feature 1">
                <h3>Privacy Protection</h3>
                <p>Learn how to protect your privacy on social media platforms.</p>
            </div>
            <div class="feature">
                <img src="static/images/feature2.png" alt="Feature 2">
                <h3>Discover Apps</h3>
                <p>Discover popular apps and their safety features.</p>
            </div>
            <div class="feature">
                <img src="static/images/feature3.png" alt="Feature 3">
                <h3>Acquire Safety Tips</h3>
                <p>Get tips on how parents can help their kids stay safe online.</p>
            </div>
        </section>
        <section class="testimonials">
            <h2>What Our Users Say</h2>
            <div class="testimonial">
                <p>"Social Media Campaigns helped me understand the importance of online safety. Highly recommend!"</p>
                <p>- User A</p>
            </div>
            <div class="testimonial">
                <p>"A great resource for parents to help keep their kids safe on social media."</p>
                <p>- User B</p>
            </div>
        </section>
        <section class="cta">
            <h2>Join Us Today</h2>
            <p>Start your journey towards safer social media usage.</p>
            <a href="register.php">Register Now</a>
        </section>
    </main>
    <section class="socials">
        <h2>SOCIAL MEDIA APPS</h2>
        <div class="social">
            <a href="https://www.facebook.com" target="_blank">
                <img src="static/images/facebook-icon.png" alt="facebook">
            </a>
        </div>
        <div class="social">
            <a href="https://www.twitter.com" target="_blank">
                <img src="static/images/twitter-icon.png" alt="twitter">
            </a>
        </div>
        <div class="social">
            <a href="https://www.instagram.com" target="_blank">
                <img src="static/images/instagram-icon.png" alt="instagram">
            </a>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
