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
    <title>Contact - SMC</title>
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
        <h2>Contact Us</h2>
        <section>
            <h3>Get in Touch</h3>
            <p>If you have any questions, feedback, or need assistance, feel free to contact us through the form below.</p>
            <form action="contact.php" method="POST">
                <label>Name:</label>
                <input type="text" name="name" required>
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Message:</label>
                <textarea name="message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>

