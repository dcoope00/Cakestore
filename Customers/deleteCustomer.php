<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    require_once '../database.php';
    
    if(isset($_POST["delete-id"]) && !empty($_POST["delete-id"])){
        $id = $_POST["delete-id"];
        
        $conn = connectToDatabase();

        $sql = "DELETE FROM Customers WHERE customer_id = ?";
        
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "<script>alert('Customer deleted successfully!');</script>";
            $stmt->close();
            $conn->close();
            header("Location: Customers.php");
            exit();
        } else {
            echo "<script>alert('Error deleting info. Please try again.');</script>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<script>alert('Customer ID is missing.');</script>";
    }
}
?>
