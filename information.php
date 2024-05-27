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
    <title>Information - SMC</title>
    <link rel="stylesheet" href="static/css/styles.css">
</head>

<body>
    <header>
        <nav>
            <a href="home.php">Home</a>
            <a href="information.php">Information</a>
            <a href="popular_apps.php">Popular Apps</a>
            <a href="parents_help.php">Parents Help</a>
            <a href="livestreaming.php">Livestreaming</a>
            <a href="contact.php">Contact</a>
            <a href="legislation.php">Legislation</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Information</h2>
        <p>Social Media Campaigns (SMC) aims to provide valuable information to help you stay safe online. Our resources include:</p>
        <ul>
            <li><strong>Privacy Tips:</strong> Learn how to protect your personal information on various social media platforms.</li>
            <li><strong>App Safety:</strong> Discover the safety features of popular apps and how to use them effectively.</li>
            <li><strong>Parental Guidance:</strong> Get tips and advice on how parents can help their children navigate the online world safely.</li>
            <li><strong>Live Streaming Safety:</strong> Understand the risks and safety measures related to live streaming.</li>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
