<?php
require 'db.php';

$result = $conn->query("SELECT 'Hello from MySQL!' as message");
$row = $result->fetch_assoc();
echo "<h1>" . $row['message'] . "</h1>";
?>