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
                <h1>Social Media Campaigns (SMC)</h1>
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="information.php">Information</a></li>
            <li><a href="popular_apps.php">Popular Apps</a></li>
            <li><a href="parents_help.php">Parents Help</a></li>
            <li><a href="livestreaming.php">Livestreaming</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="legislation.php">Legislation</a></li>
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
    <main>
        <h2>Information</h2>
        <p>Social Media Campaigns (SMC) aims to provide valuable information to help you stay safe online. Our resources include:</p>
        <ul>
    <li>
        <strong>Privacy Tips:</strong> 
        Learn how to protect your personal information on various social media platforms. 
        For example, regularly updating your privacy settings can help you control who sees your posts and personal details. Be cautious about the information you share publicly, such as your location, birthday, and contact details, as this can be used for identity theft. Additionally, using strong, unique passwords for each account and enabling two-factor authentication adds an extra layer of security.
    </li>
    <li>
        <strong>App Safety:</strong> 
        Discover the safety features of popular apps and how to use them effectively. 
        Many apps have built-in safety features like blocking and reporting options for inappropriate content or users. Familiarize yourself with these features and use them whenever necessary. Moreover, regularly updating apps ensures you have the latest security patches. Be mindful of the permissions you grant to apps, and only download apps from trusted sources to avoid malware.
    </li>
    <li>
        <strong>Parental Guidance:</strong> 
        Get tips and advice on how parents can help their children navigate the online world safely. 
        It's crucial for parents to have open conversations with their children about the potential risks online, such as cyberbullying and exposure to inappropriate content. Setting up parental controls on devices and monitoring app usage can help manage what children access online. Encouraging children to come forward with any concerns and educating them on the importance of not sharing personal information with strangers are also key strategies.
    </li>
    <li>
        <strong>Live Streaming Safety:</strong> 
        Understand the risks and safety measures related to live streaming. 
        Live streaming can be engaging but also comes with risks such as exposing too much personal information and encountering inappropriate interactions. To stay safe, consider setting streams to private, moderating comments, and being selective about what you share live. It's also important to be aware of platform-specific guidelines and to report any suspicious activity. Educating yourself on the potential risks and best practices ensures a safer live streaming experience.
    </li>
</ul>

    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
