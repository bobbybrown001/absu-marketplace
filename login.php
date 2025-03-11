<?php
session_start();

//database connection file
include("config/config.php");

$email = "";
$success = "";
$error = array();

//if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = filter_var(mysqli_real_escape_string($connection, trim($_POST['email'])), FILTER_SANITIZE_EMAIL);
    $password = mysqli_real_escape_string($connection, trim($_POST['password']));
    
    // Validation email
    function validateEmail($email, &$error) {
        if (empty($email)) {
            $error['email'] = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "Invalid email format";
        } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            $error['email'] = "Invalid email address";
        } elseif (strpos($email, ' ') !== false) {
            $error['email'] = "Email must not contain spaces";
        }
    }

    // Validation password
    function validatePassword($password, &$error) {
        if (empty($password)) {
            $error['password'] = "Password is required";
        } elseif (strlen($password) < 6) {
            $error['password'] = "Password must be at least 6 characters long";
        } elseif (!preg_match('#[0-9]+#', $password)) {
            $error['password'] = "Password must contain at least one number";
        } elseif (!preg_match('#[A-Z]+#', $password)) {
            $error['password'] = "Password must contain at least one uppercase letter";
        } elseif (!preg_match('#[a-z]+#', $password)) {
            $error['password'] = "Password must contain at least one lowercase letter";
        } elseif (!preg_match('#\W+#', $password)) {
            $error['password'] = "Password must contain at least one special character";
        } elseif (strpos($password, ' ') !== false) {
            $error['password'] = "Password must not contain spaces";
        }
    }

    // Execute validations
    validateEmail($email, $error);
    validatePassword($password, $error);

    
    /*if there are no errors in the form then 
    fetch the user data from the database */
    if(count($error)==0){
        //check for user data 
        $sql = "SELECT * FROM users where email='$email' "; 
        
        $query = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($query)>0){

            while($row = mysqli_fetch_assoc($query)){
                //encrypt password verification
                if (password_verify($password, $row['password'])) {

                    //add user details to a session and send user to dashboard
                    $_SESSION['fullname'] = $row['fullname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['userid'] = $row['id'];
                    header("location: ./user/user_dashboard.php");
                } else {
                    $error['error_message'] = "Invalid password";
                }
            }
        }else{
            // Check if email is valid
            $error['error_message'] = "Invalid email or password";
        }
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="./css/login.css">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    
    <!-- Google Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">
    
    <title>Login</title>
</head>
<body>
<div class="overflow-x-hidden overflow-y-auto">
    
    <!-- Navbar -->
    <?php include('./include/nav_bar.php') ?>

    <!-- Login as user -->
    <div class="login-box">
        <h2 style="color: #8e2de2;">LOGIN</h2>
        
        <form method="POST" action="login.php" autocomplete="off">

            <!-- error message -->
            <?php if(isset($error['error_message'])): ?>
                <div class="text-danger " style="margin-top: -13px; height: 1.7rem; font-size:0.9rem"><?php echo $error['error_message']; ?></div>
            <?php endif; ?>

            <!-- Email -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope text-light"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <!-- Email error message -->
            <?php if(isset($error['email'])): ?>
                <div class="text-danger text-start" style="margin-top: -13px; height: 1.7rem; font-size:0.9rem"><?php echo $error['email']; ?></div>
            <?php endif; ?>

            <!-- Password -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-lock text-light"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <!-- password error message -->
            <?php if(isset($error['password'])): ?>
                <div class="text-danger text-start" style="margin-top: -13px; height: 1.7rem; font-size:0.9rem"><?php echo $error['password']; ?></div>
            <?php endif; ?>

            <a href="#" class="forgot-pass">Forgot password?</a>

            <!-- submit button -->
            <input type="submit" class="login-btn mt-3" value="Login" name="login">
        </form>
        <p class="signup-link">Don't have an account? <a href="./register.php">Sign up</a></p>
    </div>
</div>

</body>
</html>