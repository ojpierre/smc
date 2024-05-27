<?php
session_start();
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
    <title>Parents Help - SMC</title>
    <link rel="stylesheet" href="static/css/styles.css">
</head>

<body>
    <header>
        <h1>Social Media Campaigns (SMC)</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="information.php">Information</a></li>
                <li><a href="popular_apps.php">Popular Apps</a></li>
                <li><a href="parents_help.php">Parents Help</a></li>
                <li><a href="livestreaming.php">Live Streaming</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="legislation.php">Legislation</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Parents Help</h2>
        <p>As a parent, it is important to ensure your child's safety on social media. Here are some tips to help you guide and protect your children online.</p>
        <h3>Monitor Their Activity</h3>
        <p>Regularly check the social media platforms your child is using and review their privacy settings. Discuss with them the importance of keeping personal information private.</p>
        <h3>Set Rules and Guidelines</h3>
        <p>Establish clear rules for social media usage, including time limits and the type of content they are allowed to share. Make sure they understand the reasons behind these rules.</p>
        <h3>Educate About Online Risks</h3>
        <p>Discuss potential online dangers such as cyberbullying, predators, and privacy breaches. Teach them how to recognize and avoid these risks.</p>
        <h3>Encourage Open Communication</h3>
        <p>Encourage your children to come to you if they encounter anything uncomfortable or suspicious online. Maintain an open and non-judgmental communication channel.</p>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
