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
    
    <title> Profile </title>
</head>
<body>
    <!-- nav.bar -->
    <?php include ('./include/sidebar.php') ?>

    <!-- Main Content -->
    <div class="maincontainer">

        <div class="content">

            <div class="my-profile">
                <h2>My Profile</h2>

                <!-- icon -->
                <a href="./settings.php">
                    <span class="material-symbols-outlined">settings</span>
                </a>
            </div>


            <div class="profile-container">

                <!-- profile -->
                <div class="profile" >
                    <div class="profile-photo">
                        <img src="../asset/image/image1.png" alt="">
                    </div>
                </div>

                
            

                <div class="details">
                    
                    <!-- Profile Information -->
                    <div>
                        <h3>Full Name</h3>
                        <p>Bobby Brown</p>

                        <h3>User Name</h3>
                        <p>BobbyBrown001</p>

                        <h3>Email</h3>
                        <p>Bobby0Brown001@gmail.com</p>

                        <h3>Phone</h3>
                        <p>08082958171</p>

                        <h3>Account type</h3>
                        <p>User</p>
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
