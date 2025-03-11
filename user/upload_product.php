<?php

// Include database connection file
include("../config/config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $user_id = 1; // Assume logged-in user

    // Handle Image Upload
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    // Insert Product into Database
    $stmt = $connection->prepare("INSERT INTO products (user_id, title, category, description, price, image) 
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issdss", $user_id, $title, $category, $description, $price, $image);

    if ($stmt->execute()) {
        echo "Product posted successfully!";
    } else {
        echo "Error posting product.";
    }
}
?>