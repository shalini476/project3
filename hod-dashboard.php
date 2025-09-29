<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded login (you can replace with DB later)
    if ($username == "hod" && $password == "1234") {
        $_SESSION['hod'] = $username;
    } else {
        $error = "Invalid Username or Password!";
    }
}

// --- Logout ---
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: hod_dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HOD Dashboard</title>
</head>
<body>
<?php if (!isset($_SESSION['hod'])): ?>
    <h2>HOD Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<?php else: ?>
    <h1>Welcome, <?php echo $_SESSION['hod']; ?> 👋</h1>
    <h2>Dashboard</h2>
    <ul>
        <li>✔ Manage Students</li>
        <li>✔ Manage Faculty</li>
        <li>✔ Approve Reports</li>
    </ul>
    <a href="?logout=true">Logout</a>
<?php endif; ?>
</body>
</html>
