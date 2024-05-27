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
    <title>Live Streaming - SMC</title>
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
        <h2>Live Streaming</h2>
        <section>
            <h3>Introduction to Live Streaming</h3>
            <p>Live streaming allows you to broadcast real-time video to your audience over the internet. Popular platforms include YouTube Live, Facebook Live, Instagram Live, and Twitch.</p>
        </section>
        <section>
            <h3>Best Practices for Live Streaming</h3>
            <ul>
                <li><strong>Plan Your Content:</strong> Outline what you want to cover during your live stream.</li>
                <li><strong>Engage with Your Audience:</strong> Respond to comments and questions in real-time to create an interactive experience.</li>
                <li><strong>Promote Your Stream:</strong> Let your audience know in advance when you'll be live streaming.</li>
                <li><strong>Test Your Setup:</strong> Ensure your internet connection, camera, and microphone are working properly before you go live.</                </li>
                <li><strong>Analyze Performance:</strong> Review the analytics of your live streams to understand what works and what doesn’t.</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
