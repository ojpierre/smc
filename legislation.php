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
    <title>Legislation - SMC</title>
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
        <h2>Legislation</h2>
        <section>
            <h3>Social Media Laws and Regulations</h3>
            <p>Staying informed about the laws and regulations surrounding social media use is crucial. Here are some key areas of legislation:</p>
            <ul>
                <li><strong>Data Privacy:</strong> Regulations like GDPR and CCPA protect user data and privacy. Learn about your rights and responsibilities under these laws.</li>
                <li><strong>Cyberbullying:</strong> Many countries have laws that address cyberbullying and online harassment. Understand how to report and deal with such incidents.</li>
                <li><strong>Content Moderation:</strong> Social media platforms have policies for content moderation, including the removal of harmful or illegal content. Familiarize yourself with these policies.</li>
                <li><strong>Intellectual Property:</strong> Learn about copyright laws and how they apply to content shared on social media platforms.</li>
                <li><strong>Advertising Standards:</strong> There are regulations governing online advertising, including disclosure requirements for influencers and sponsored content.</li>
            </ul>
        </section>
        <section>
            <h3>Resources</h3>
            <p>Here are some resources to help you stay updated on social media legislation:</p>
            <ul>
                <li><a href="https://www.eugdpr.org/">EU GDPR</a></li>
                <li><a href="https://oag.ca.gov/privacy/ccpa">California Consumer Privacy Act (CCPA)</a></li>
                <li><a href="https://www.stopbullying.gov/">StopBullying.gov</a></li>
                <li><a href="https://www.copyright.gov/">U.S. Copyright Office</a></li>
                <li><a href="https://www.ftc.gov/">Federal Trade Commission (FTC)</a></li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
