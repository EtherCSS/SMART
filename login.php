<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    echo "<h1>Login Data Received!</h1>";
    echo "<p>Username/Email: " . htmlspecialchars($user) . "</p>";
    echo "<p>Password: " . htmlspecialchars($pass) . "</p>";
} else {
    echo "<h1>Invalid request</h1>";
}
?>
