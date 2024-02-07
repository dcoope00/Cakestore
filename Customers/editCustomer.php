<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    require_once '../database.php';
    
    $id =$_POST["edit-id"];
    $name = $_POST["edit-name"];
    $email = $_POST["edit-email"];
    $phone =$_POST["edit-phone"];

    echo $name . " " . $email . " " . $phone . " " . $id;
    $conn = connectToDatabase();

    $sql = "UPDATE Customers SET customer_name=?, customer_email=?, customer_phone=? WHERE customer_id = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssi", $name, $email, $phone, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Customer info updated successfully!');</script>";
        
        $stmt->close();
        
        $conn->close();
        header("Location: Customers.php");
        exit();
    } else {
      
        echo "<script>alert('Error updating customer info. Please try again.');</script>";
    }

    $stmt->close();

    $conn->close();
}
?>
