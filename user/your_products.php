<?php

// Include database connection file
include("../config/config.php");

$result = $connection->query("SELECT * FROM products ORDER BY created_at DESC");

while ($row = $result->fetch_assoc()) {
    echo "<div class='product'>";
    echo "<h3>{$row['title']}</h3>";
    echo "<p>Price: {$row['price']}</p>";
    echo "<img src='uploads/{$row['image']}' width='100'>";
    echo "<button class='request' data-id='{$row['id']}'>Request</button>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css link -->
    <link rel="stylesheet" href="./css/your_roducts.css">
    <!-- css link for light to dark mood -->
    <link rel="stylesheet" href="./css/dark-lightmode.css">
    <!-- css link for side bar -->
    <link rel="stylesheet" href="./css/sidebar.css">
    
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">

    <!-- google fonts import - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- google fonts import - Gochi Hand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Titan+One&display=swap" rel="stylesheet">
    
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title> Your Products </title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto" id="container">
        <!-- Nav Bar -->
        <div class="sidenavbar">
            <?php include ('./include/sidebar.php') ?>
        </div>

        <!-- Main Content -->
        <div class="maincontainer">
            <div class="container">

                <div class="your_product">
                    <h2>Your Products</h2>
    
                    <a class="btn btn-primary" href="./edit_product.php">
                        <span class="material-symbols-outlined">add</span>
                        New Product
                    </a>
                </div>                
                
                <div id="productList"></div> <!-- Products will be loaded here -->

            </div>
        </div>
    </div>


    
    <script>
        $(document).ready(function(){
            // Load products from the server
            function loadProducts() {
                $("#productList").load("your_product.php"); // Fetches product data from fetch_products.php
            }

            loadProducts(); // Load products when the page loads
        });
    </script>
</body>
</html>


style>
        body {
            background-color: #f8f9fa;
        }
        .product-card {
            transition: 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>

<div class="container mt-5">
    <h2 class="text-center mb-4">Available Products</h2>
    
    <div class="row">
        <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="col-md-4 mb-4">
            <div class="card product-card">
                <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top product-img" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                    <h6 class="text-primary">$<?php echo number_format($row['price'], 2); ?></h6>
                    <a href="#" class="btn btn-success request-btn" data-id="<?php echo $row['id']; ?>">Request</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on("click", ".request-btn", function() {
    var product_id = $(this).data("id");
    $.post("request_product.php", { product_id: product_id }, function(response) {
        alert(response);
    });
});
</script>

</body>
</html>