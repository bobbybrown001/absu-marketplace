<?php
session_start();

// Include database connection file
include("../config/config.php");

// Redirect to login if not logged in
if (!isset($_SESSION['userid'])) {
    echo "<script>location='../login.php'</script>";
    exit;
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
    <link rel="stylesheet" href="./css/settings.css">
    <!-- css link for settings nav-->
    <link rel="stylesheet" href="./css/settings-nav.css">
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

    <title> user dashboard </title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto" id="container">
        <!-- Nav Bar -->
        <div class="sidenavbar">
            <?php include ('./include/sidebar.php') ?>
        </div>

        <div class="container">
        <h2 class="text-center">Edit Profile</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Display Profile Information -->
                <form action="settings.php" method="POST">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" 
                            value="<?php echo htmlspecialchars($user['fullname']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" id="username" name="username" class="form-control" 
                            value="<?php echo htmlspecialchars($user['username']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" 
                            value="<?php echo htmlspecialchars($user['email']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" 
                            value="<?php echo htmlspecialchars($user['phone']); ?>">
                    </div>
                    <button type="submit" name="update_profile" class="btn btn-success mt-3">Update Profile</button>
                </form>

                <hr>

                <!-- Update Password -->
                <form action="settings.php" method="POST">
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
                    <button  type="submit" name="update_password" class="btn btn-primary mt-3 mb-3">Change password</button>
                </form>
            </div>
        </div>
    </div>

    <!-- javascript cdn -->
    <script src="./dark-lightmode.js"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</body>
</html>


<?php
// Handle Profile Update
if (isset($_POST['update_profile'])) {
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);

    $updateQuery = "UPDATE users SET fullname = '$fullname', username = '$username', email = '$email', phone = '$phone' WHERE id = $userId";
    if (mysqli_query($connection, $updateQuery)) {
        echo "<script>alert('Profile updated successfully!'); location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error updating profile.');</script>";
    }
}

// Handle Password Update
if (isset($_POST['update_password'])) {
    $currentPassword = mysqli_real_escape_string($connection, $_POST['current_password']);
    $newPassword = mysqli_real_escape_string($connection, $_POST['new_password']);
    $confirmPassword = mysqli_real_escape_string($connection, $_POST['confirm_password']);

    // Verify current password
    $passwordQuery = "SELECT password FROM users WHERE id = $userId";
    $passwordResult = mysqli_query($connection, $passwordQuery);
    $storedPassword = mysqli_fetch_assoc($passwordResult)['password'];


    // Compare current password and new password
    if(password_verify($currentPassword, $storedPassword)){
        if($newPassword === $confirmPassword){
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updatePasswordQuery = "UPDATE users SET password = '$hashedPassword' WHERE id=$userId";
            if(mysqli_query($connection, $updatePasswordQuery)){
                echo "<script>alert('Password updated successfully!'); location='user-profile.php';</script>";
            }else{
                echo "<script>alert('Error updated password!');</script>";
            }
        }else{
            echo "<script>alert('New password and comfirm password do not match!');</script>";
        }
    }else{
        echo "<script>alert('Current password is incorrect!');</script>";
    }
}
 ?>