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
    <p>As a parent, it is important to ensure your child's safety on social media. The digital world presents numerous opportunities but also significant risks. Here are some comprehensive tips to help you guide and protect your children online.</p>
    
    <h3>Monitor Their Activity</h3>
    <p>Regularly checking the social media platforms your child is using is crucial. Familiarize yourself with the apps and websites they frequent, and review their privacy settings to ensure they are appropriately configured. Discuss with them the importance of keeping personal information private, such as their full name, address, phone number, and school details. Encourage them to use strong passwords and to change them regularly. Additionally, consider using parental control tools to track their activity and screen time.</p>
    
    <h3>Set Rules and Guidelines</h3>
    <p>Establish clear rules for social media usage. These rules should include specific time limits for how long they can spend online each day, and guidelines for the types of content they are allowed to share. Explain the reasons behind these rules to help them understand that they are in place for their protection. For example, set boundaries on the kind of photos they can post and advise against sharing their location in real-time. You might also create a family agreement that outlines the do's and don'ts of online behavior, which can be a useful reference.</p>
    
    <h3>Educate About Online Risks</h3>
    <p>Discuss potential online dangers such as cyberbullying, online predators, and privacy breaches. Educate them on how to recognize these threats and what steps to take if they encounter them. For instance, teach them not to accept friend requests from strangers and to be cautious of suspicious messages or links. Role-playing different scenarios can be an effective way to help them understand what to do in various situations. Additionally, inform them about the importance of reporting any inappropriate content or behavior they witness online.</p>
    
    <h3>Encourage Open Communication</h3>
    <p>Encourage your children to come to you if they encounter anything uncomfortable or suspicious online. Maintaining an open and non-judgmental communication channel is vital. Let them know that they can talk to you about any issues without fear of punishment. This will help build trust and ensure they feel comfortable seeking your help. Regularly ask them about their online experiences and show genuine interest in their digital interactions. Additionally, consider having regular family discussions about online safety to keep the conversation ongoing and up-to-date.</p>
</main>

    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>

</html>
