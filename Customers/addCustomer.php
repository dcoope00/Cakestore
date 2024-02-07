<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    require_once '../database.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $conn = connectToDatabase();

    $sql = "INSERT INTO Customers (customer_name, customer_email, customer_phone) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $phone);

    if ($stmt->execute()) {
        echo "<script>alert('Customer added successfully!');</script>";
        getAllCustomers($conn);
        header("Location: Customers.php");
    } else {
        echo "<script>alert('Error adding customer. Please try again.');</script>";
    }

    $conn->close();
}
?>