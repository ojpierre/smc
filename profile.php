<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT first_name, surname, email FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("UPDATE users SET first_name = ?, surname = ?, email = ? WHERE id = ?");
    if ($stmt->execute([$first_name, $surname, $email, $user_id])) {
        echo "Profile updated!";
        // Refresh user data
        $stmt = $pdo->prepare("SELECT first_name, surname, email FROM users WHERE id = ?");
        $stmt->execute([$user_id]);
        $user = $stmt->fetch();
    } else {
        echo "Update failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="static/css/styles.css">
</head>
<body>
    <header>
        <h1>Social Media Campaigns (SMC)</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="information.html">Information</a></li>
                <li><a href="popular_apps.html">Popular Apps</a></li>
                <li><a href="parents_help.html">Parents Help</a></li>
                <li><a href="livestreaming.html">Live Streaming</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="legislation.html">Legislation</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Your Profile</h2>
        <form action="profile.php" method="POST">
            <label>First Name:</label>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
            <label>Surname:</label>
            <input type="text" name="surname" value="<?php echo htmlspecialchars($user['surname']); ?>" required>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            <button type="submit">Update Profile</button>
        </form>
        <p><a href="home.php">Back to Home</a></p>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns</p>
    </footer>
</body>
</html>
