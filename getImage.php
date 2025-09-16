<?php
// getImage.php - fetch image binary data from database

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Veloura";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT image FROM products WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        // Send proper header and echo binary image
        header("Content-Type: image/jpeg");
        echo $row['image'];
    } else {
        // No image found -> send a placeholder
        header("Content-Type: image/png");
        readfile("placeholder.png");
    }
} else {
    http_response_code(400);
    echo "Missing image ID";
}

$conn->close();
