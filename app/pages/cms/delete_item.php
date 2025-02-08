<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "pup_engage"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $conn->prepare("DELETE FROM merchandise WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Item deleted successfully!'); window.location.href='https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/merchandiseapproval.php';</script>";
    } else {
        echo "<script>alert('Error deleting item.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
