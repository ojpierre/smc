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
    <title>Popular Apps - SMC</title>
    <link rel="stylesheet" type="text/css" href="static/css/styles.css">
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
        <h2>Popular Apps</h2>
        <section>
            <h3>Top Social Media Apps</h3>
            <ul>
                <li><strong>Facebook:</strong> A platform for connecting with friends and family, sharing photos, and joining groups.</li>
                <li><strong>Instagram:</strong> A photo and video sharing app popular for its filters and Stories feature.</li>
                <li><strong>Twitter:</strong> A microblogging platform where users post and interact with messages known as "tweets."</li>
                <li><strong>TikTok:</strong> A video-sharing app known for short, viral videos.</li>
                <li><strong>LinkedIn:</strong> A professional networking site used for career networking and job searching.</li>
                <li><strong>Snapchat:</strong> A multimedia messaging app known for its disappearing messages and filters.</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
