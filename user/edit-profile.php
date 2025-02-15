<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css link -->
    <link rel="stylesheet" href="./css/edit-profile.css">
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
    
    <title> Edit Profile </title>
</head>
<body>
    <!-- nav.bar -->
    <?php include ('./include/sidebar.php') ?>


    <!-- Main Content -->
    <div class="maincontent">
        <div class="profileContent">
            <div class="container mt-5">
                <h2 class="text-center">My Profile</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-9">

                
                        <!-- Display Profile Information -->
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fullname">User Name</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                            <button type="submit" name="update_profile" class="btn btn-success mt-3">Update Profile</button>
                        </form>
            
                        <hr>
            
                        <!-- Update Password -->
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" id="current_password" name="current_password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" id="new_password" name="new_password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                            </div>
                            <button  type="submit" name="update_password" class="btn btn-primary mt-3 ">Change password</button>
                        </form>
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