<?php

// Include database connection file
include("../config/config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css link -->
    <link rel="stylesheet" href="./css/edit_product.css">
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

    <title> Edit Product </title>
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

                <div>
                    <h2>Add New Product</h2>
                </div>

                <hr>
                <div>
                    <form id="productForm" enctype="multipart/form-data" method="POST" action="./upload_product.php">
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter a clear and catchy product title" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                             <select name="category" id="category" class="form-control" >
                                <option value="#">Select a category that best fits your product</option>
                                <option value="Electronics & Gadgets">Electronics & Gadgets</option>
                                <option value="Clothing & Fashion">Clothing & Fashion</option>
                                <option value="Books & Stationery">Books & Stationery</option>
                                <option value="Room & Living Essentials">Room & Living Essentials</option>
                                <option value="Sports & Fitness">Sports & Fitness</option>
                                <option value="Music & Instruments">Music & Instruments</option>
                                <option value="Study & Exam Prep">Lodge / Hostel</option>
                                <option value="Services">Services</option>
                                <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                                <option value="Home & Appliances">Home & Appliances</option>
                                <option value="Study & Exam Prep">Study & Exam Prep</option>
                                <option value="Food & Beverages">Food & Beverages</option>
                                <option value="Event & Party Supplies">Event & Party Supplies</option>
                                <option value="Mobile Accessories">Mobile Accessories</option>
                                <option value="Software & Digital Products">Software & Digital Products</option>
                                <option value="Bicycles & Transportation">Bicycles & Transportation</option>
                             </select>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" maxlength="800" placeholder="Provide a detailed description of your product...."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price (optional)</label>
                            <input type="number" id="price" name="price" class="form-control" aria-describedby="price" placeholder="Enter the price of your product">
                        </div>
                        <div class="form-group mb-3">
                            <label for="passport">Product image </label>
                            <input type="file" accept="image/*" name="image" class="form-control" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary rounded-5" name="submit" class="form-control" value="Post Product">
                        </div>
                    </form>
                </div>                    
            </div>
        </div>
    </div>

    <div id="message"></div>
    <div id="productList"></div>

    <script src="./javascript/edit_product.js"></script>
</body>
</html>