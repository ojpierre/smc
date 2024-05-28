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
    <p>Staying informed about the laws and regulations surrounding social media use is crucial. These regulations are designed to protect users and maintain a safe and fair online environment. Here are some key areas of legislation you should be aware of:</p>
    <ul>
        <li>
            <strong>Data Privacy:</strong>
            Regulations like the General Data Protection Regulation (GDPR) in the European Union and the California Consumer Privacy Act (CCPA) in the United States protect user data and privacy. 
            <p>These laws grant individuals rights over their personal data, such as the right to access, delete, and control how their data is used. Companies are required to be transparent about data collection practices and must obtain explicit consent from users before processing their data. As a user, it's important to understand your rights under these laws and how to exercise them. For businesses, compliance involves implementing robust data protection measures and updating privacy policies to reflect these requirements.</p>
        </li>
        <li>
            <strong>Cyberbullying:</strong>
            Many countries have laws that address cyberbullying and online harassment. 
            <p>These laws aim to protect individuals from abusive behavior online, including threats, stalking, and defamation. For instance, the United Kingdom's Malicious Communications Act and the United States' various state-level anti-cyberbullying laws provide legal recourse for victims. If you or someone you know is a victim of cyberbullying, it's important to know how to report the incident to the relevant authorities and social media platforms. Documenting evidence of the harassment and blocking the offender are initial steps in addressing the issue.</p>
        </li>
        <li>
            <strong>Content Moderation:</strong>
            Social media platforms have policies for content moderation, including the removal of harmful or illegal content. 
            <p>Platforms like Facebook, Twitter, and YouTube have community guidelines that outline what is and isn't allowed. This includes rules against hate speech, graphic violence, and misinformation. Users should familiarize themselves with these policies to avoid content removal or account suspension. Content creators need to be particularly mindful of these guidelines to ensure their posts comply with platform standards. Additionally, knowing how to report inappropriate content can help maintain a safer online environment.</p>
        </li>
        <li>
            <strong>Intellectual Property:</strong>
            Learn about copyright laws and how they apply to content shared on social media platforms.
            <p>Copyright laws protect the creators of original works, including photos, videos, music, and written content. Sharing content without permission can lead to legal repercussions, including takedown notices and penalties. Platforms like Instagram and YouTube have mechanisms to handle copyright claims, such as the Digital Millennium Copyright Act (DMCA) takedown process. To avoid infringing on intellectual property rights, always seek permission before using someone else's work and consider using royalty-free or licensed content for your posts.</p>
        </li>
        <li>
            <strong>Advertising Standards:</strong>
            There are regulations governing online advertising, including disclosure requirements for influencers and sponsored content.
            <p>Advertising standards are set to ensure transparency and honesty in marketing practices. Influencers and brands must disclose paid partnerships and sponsored content to their audience, as required by laws such as the Federal Trade Commission (FTC) guidelines in the United States. This includes using clear and conspicuous language like "ad" or "sponsored" in posts. Failure to comply with these regulations can result in penalties and damage to reputation. As a consumer, being aware of these standards helps you make informed decisions about the content you engage with.</p>
        </li>
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
