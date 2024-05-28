<?php
session_start();

// Redirect logged-in users to home.php
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit;
}

$error_message = '';

// Initialize or retrieve failed login attempt data
if (!isset($_SESSION['failed_attempts'])) {
    $_SESSION['failed_attempts'] = 0;
    $_SESSION['lock_time'] = null;
}

// Check if the lock time has expired
if ($_SESSION['lock_time'] && time() > $_SESSION['lock_time']) {
    // Reset the failed attempts and lock time after the lockout period
    $_SESSION['failed_attempts'] = 0;
    $_SESSION['lock_time'] = null;
}

// Check if the user is currently locked out
if ($_SESSION['failed_attempts'] >= 3 && $_SESSION['lock_time'] > time()) {
    $remaining_time = ($_SESSION['lock_time'] - time()) / 60;
    $error_message = "Too many failed login attempts. Please try again in " . ceil($remaining_time) . " minutes.";
} else {
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Include database connection
        include 'db.php';

        // Get form data
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Prepare and execute the query
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Verify password and set session
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['failed_attempts'] = 0; // Reset failed attempts
            header("Location: home.php");
            exit;
        } else {
            $_SESSION['failed_attempts'] += 1;
            if ($_SESSION['failed_attempts'] >= 3) {
                $_SESSION['lock_time'] = time() + (10 * 60); // Lock for 10 minutes
                $error_message = "Too many failed login attempts. Please try again in 10 minutes.";
            } else {
                $error_message = "Invalid email or password. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMC</title>
    <link rel="stylesheet" href="static/css/styles.css">
</head>
<body>
    <header>
        <nav>
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            <?php else : ?>
                <a href="logout.php">Logout</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <h1>Login to Social Media Campaigns</h1>
        <?php if (!empty($error_message)) : ?>
            <p style="color:red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit" <?php echo ($_SESSION['failed_attempts'] >= 3 && $_SESSION['lock_time'] > time()) ? 'disabled' : ''; ?>>Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2024 Social Media Campaigns Ltd. All rights reserved.</p>
    </footer>
</body>
</html>
