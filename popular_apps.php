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
    <li>
        <strong>Facebook:</strong>
        A platform for connecting with friends and family, sharing photos, and joining groups. 
        <p>Facebook allows users to create profiles, upload photos and videos, and keep in touch through messages and status updates. You can also join groups based on your interests, participate in events, and use the Marketplace for buying and selling items locally. It's important to regularly review your privacy settings to control who can see your posts and personal information. Be cautious about accepting friend requests from people you don't know to avoid potential scams or privacy breaches.</p>
    </li>
    <li>
        <strong>Instagram:</strong>
        A photo and video sharing app popular for its filters and Stories feature.
        <p>Instagram is widely used for sharing visual content. The app offers a variety of filters and editing tools to enhance your photos and videos. The Stories feature allows you to share moments that disappear after 24 hours. To stay safe on Instagram, avoid sharing sensitive personal information and use the private account option if you want to limit your audience to approved followers only. Be mindful of the content you post and who you interact with to protect your privacy.</p>
    </li>
    <li>
        <strong>Twitter:</strong>
        A microblogging platform where users post and interact with messages known as "tweets."
        <p>Twitter allows users to share short messages of up to 280 characters, called tweets. It's a great platform for following news, trends, and public figures. You can also engage in discussions through replies, retweets, and likes. Use Twitter's list feature to organize the accounts you follow into categories. To enhance your security, enable two-factor authentication and be cautious about sharing personal details publicly. Block or mute accounts that engage in harassment or unwanted interactions.</p>
    </li>
    <li>
        <strong>TikTok:</strong>
        A video-sharing app known for short, viral videos.
        <p>TikTok allows users to create and share 15 to 60-second videos, often set to music or featuring various effects. The app is known for its trending challenges and viral content. While it can be a fun platform, it's essential to be aware of privacy settings and limit who can see and interact with your videos. Encourage children and teenagers to use TikTok's Digital Wellbeing features to set screen time limits and filter out inappropriate content.</p>
    </li>
    <li>
        <strong>LinkedIn:</strong>
        A professional networking site used for career networking and job searching.
        <p>LinkedIn is a valuable tool for building professional connections, sharing industry-related content, and searching for job opportunities. Users can create detailed profiles highlighting their skills, experiences, and achievements. Join groups related to your field to expand your network and participate in discussions. To protect your professional image, ensure that your profile is complete and up-to-date, and be mindful of the content you share. Avoid accepting connection requests from unknown individuals to prevent potential phishing attempts.</p>
    </li>
    <li>
        <strong>Snapchat:</strong>
        A multimedia messaging app known for its disappearing messages and filters.
        <p>Snapchat allows users to send photos and videos that disappear after being viewed. It features various filters, lenses, and Bitmoji avatars to enhance your snaps. The app also includes Stories, which are visible for 24 hours, and Discover, which offers content from publishers. To stay safe on Snapchat, regularly review your privacy settings to control who can send you snaps and view your Stories. Avoid sharing personal information or accepting friend requests from strangers, as the ephemeral nature of the app can sometimes encourage risky behavior.</p>
    </li>
</ul>

        </section>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
