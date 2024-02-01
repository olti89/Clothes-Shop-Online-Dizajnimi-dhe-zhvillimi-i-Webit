<?php


$servername = "localhost";
$dbname = "projekti";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$admin_email = "olti@olti.com"; // Replace with your desired admin email
$admin_password = password_hash("12345678", PASSWORD_DEFAULT); // Replace with your desired admin password

$sql = "INSERT INTO admin (email, password, is_admin) VALUES (?, ?, 1)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $admin_email, $admin_password);

if ($stmt->execute()) {
    echo "Admin added successfully";
    header("Location: displaytedhenat.php"); 

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>