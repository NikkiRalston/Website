<?php
$errorMessage = ""; // Initialize error message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    require_once('intranet.php'); // Corrected path and removed unnecessary space

    $username = $_POST['username'];
    $password = $_POST['userpwd'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $check = mysqli_fetch_array($result);

    if ($check) {
        $errorMessage = 'success';
        $_SESSION['id'] = session_id();
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['username'] = $check["username"];
        
        // Redirect to info.php
        header('Location: info.php');
        exit; // Add exit after header to stop script execution
    } else {
        $errorMessage = 'Login failed. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <!-- Display error message if login fails -->
    <?php if ($errorMessage): ?>
    <p><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <!-- Create a login form -->
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="userpwd">Password:</label>
        <input type="password" name="userpwd" id="userpwd" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

