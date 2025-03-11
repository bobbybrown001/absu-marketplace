<?php
session_start();

// Include database connection file
include("../config/config.php");

// Redirect to login if not logged in
if (!isset($_SESSION['userid'])) {
    header('location: ../login.php');
    exit();
}

// Get logged-in user's data
$userId = $_SESSION['userid'];
$query = "SELECT * FROM users WHERE id = $userId";
$result = mysqli_query($connection, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "User not found.";
    exit;
}

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css link -->
    <link rel="stylesheet" href="./css/user-profile.css">
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

    <title> Profile </title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto" id="container">
        <!-- Nav Bar -->
        <div class="sidenavbar">
            <?php include ('./include/sidebar.php') ?>
        </div>

        <!-- Main Content -->
        <div class="maincontainer">
            <h1>Profile</h1>
            <!-- <h2 class="text-center me-5">My Profile</h2> -->
            <div class="container my-5">
                
                <div class="row justify-content-center">

                    <!-- Profile Photo -->
                    <div class="col-md-5 col-sm-12">
                        <div class="profile-photo">
                            <img src="../asset/image/image1.png" class="img-fluid" alt="Profile Photo">
                        </div>
                    </div>

                    <!-- Profile Details -->
                    <div class="col-md-6 col-sm-12 mt-5 mt-md-0">
                        <div class="details">
                            <h3>Full Name</h3>
                            <p><?php echo htmlspecialchars($user['fullname']); ?></p>

                            <h3>Username</h3>
                            <p><?php echo htmlspecialchars($user['username']); ?></p>

                            <h3>Email</h3>
                            <p><?php echo htmlspecialchars($user['email']); ?></p>

                            <h3>Phone</h3>
                            <p><?php echo htmlspecialchars($user['phone']); ?></p>

                            <h3>Account Type</h3>
                            <p>User</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- javascript cdn -->
    <script src="./dark-lightmode.js"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</body>
</html>
