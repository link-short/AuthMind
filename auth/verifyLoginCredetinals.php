<?php
if (isset($_GET['phone'])) {
    $name = $_GET['phone'];
    echo "Привет, твой номер " . htmlspecialchars($phone) . "!"; // Для безопасности используйте htmlspecialchars
}

if (isset($_GET['username'])) {
    $city = $_GET['username'];
    echo "<br>Ваш username " . htmlspecialchars($username) . ".";
}
?>
