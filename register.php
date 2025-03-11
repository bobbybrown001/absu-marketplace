<?php
session_start();

// Include database connection
include("config/config.php");

// Initialize variables
$fullname = "";
$username = "";
$email = "";
$phone = ""; 
$pass = "";
$success = "";
$error = array();

if (isset($_POST['register'])) {
    // Sanitize user input
    $fullname = mysqli_real_escape_string($connection, trim($_POST['fullname']));
    $username = mysqli_real_escape_string($connection, trim($_POST['username']));
    $email = mysqli_real_escape_string($connection, trim($_POST['email']));
    $phone = mysqli_real_escape_string($connection, trim($_POST['phone']));
    $pass = mysqli_real_escape_string($connection, trim($_POST['password']));
    $confirmpassword = mysqli_real_escape_string($connection, trim($_POST['confirmpassword']));

    // Validation fullname
    function validateFullname($fullname, &$error) {
        if (empty($fullname)) {
            $error['fullname'] = "Fullname is required";
        } elseif (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $error['fullname'] = "Fullname must contain letters only";
        }
    }

    // Validation username
    function validateUsername($username, &$error) {
        if (empty($username)) {
            $error['username'] = "Username is required";
        } elseif (strlen($username) > 8) {
            $error['username'] = "Username must be 8 characters long";
        }
    }

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

    // Validation phone
    function validatePhone($phone, &$error) {
        if (empty($phone)) {
            $error['phone'] = "Phone number is required";
        } elseif (!preg_match('/^\d{11}$/', $phone)) {
            $error['phone'] = "Phone number must be 11 digits only";
        } elseif (strpos($phone, ' ') !== false) {
            $error['phone'] = "Phone number must not contain spaces";
        }
    }

    // Validation password
    function validatePassword($pass, $confirmpassword, &$error) {
        if (empty($pass)) {
            $error['password'] = "Password is required";
                if(empty($confirmpassword)){
                    $error['confirmpassword'] = "confirm password is required";
                }
        } elseif ($pass !== $confirmpassword) {
            $error['confirmpassword'] = "Passwords do not match";
        } elseif (strlen($pass) < 6) {
            $error['password'] = "Password must be at least 6 characters long";
        } elseif (!preg_match('#[0-9]+#', $pass)) {
            $error['password'] = "Password must contain at least one number";
        } elseif (!preg_match('#[A-Z]+#', $pass)) {
            $error['password'] = "Password must contain at least one uppercase letter";
        } elseif (!preg_match('#[a-z]+#', $pass)) {
            $error['password'] = "Password must contain at least one lowercase letter";
        } elseif (!preg_match('#\W+#', $pass)) {
            $error['password'] = "Password must contain at least one special character";
        } elseif (strpos($pass, ' ') !== false) {
            $error['password'] = "Password must not contain spaces";
        }
    }

    // Execute validations
    validateFullname($fullname, $error);
    validateUsername($username, $error);
    validateEmail($email, $error);
    validatePhone($phone, $error);
    validatePassword($pass, $confirmpassword, $error);

    // Terms and conditions validation
    if (!isset($_POST['terms'])) {
        $error['terms'] = "You must accept the terms and privacy policy";
    }

    // Check if username or email already exists
    if (count($error) == 0) {
        $check_user = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
        $result = mysqli_query($connection, $check_user);
        $existingUser = mysqli_fetch_assoc($result);

        if ($existingUser) {
            if ($existingUser['username'] === $username) {
                $error['username'] = "Username already exists";
            }
            if ($existingUser['email'] === $email) {
                $error['email'] = "Email already exists";
            }
        }
    }

    // Insert data if no errors
    if (count($error) == 0) {
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $insert = "INSERT INTO users (fullname, username, email, phone, password) 
                              VALUES ('$fullname', '$username', '$email', '$phone', '$password')";
        
        if (mysqli_query($connection, $insert)) {
            $success = "Registration successful";
            header('refresh:2; url=login.php');
        } else {
            $success = "<span class='text-danger'>Failed to register</span>";
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
    <link rel="stylesheet" href="./css/register.css">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>

    <!-- Google Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">
    
    <title>User Register</title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto">

        <!-- Navbar -->
        <?php include('./include/nav_bar.php') ?>

        <div class="collection col-9 col-lg-5" id="firstContainer">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="firstPageForm" autocomplete="off">
                <h1 class="text-center fw-bold" style=" color: #8e2de2;">REGISTER</h1>
                <p class="text-center" style="font-size: 18px; color: #ff4e95;">Create an account with us, it's quick and easy</p>
                <hr>
                <div class="text-center text-success">
                    <?php echo $success; ?>
                </div>

                <!-- Full Name -->
                <div class="mb-1">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Input full name" value="<?php echo $fullname; ?>">  
                    <!-- fullname error message -->
                    <div style="font-size: 0.9rem; height:18px">
                        <?php if(isset($error['fullname'])): ?>
                            <div class="text-danger"><?php echo $error['fullname']; ?></div>
                        <?php endif; ?>
                    </div> 
                </div>
    
                <!-- User Name -->
                <div class="mb-1">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="userName" name="username" placeholder="Input Username" onkeydown="return preventSpace(event);" value="<?php echo $username; ?>">
                    <!-- username error message -->
                    <div style="font-size: 0.9rem; height:18px">
                        <?php if(isset($error['username'])): ?>
                            <div class="text-danger"><?php echo $error['username']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
      
                <!-- Email -->
                <div class="mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Input email address" value="<?php echo $email; ?>">
                    <!-- email error message -->
                    <div style="font-size: 0.9rem; height:18px">
                        <?php if(isset($error['email'])): ?>
                            <div class="text-danger"><?php echo $error['email']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
    
                <!-- Phone Number -->
                <div class="mb-1">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Input Phone Number" maxlength="11" value="<?php echo $phone; ?>">
                    <!-- phone error message -->
                    <div style="font-size: 0.9rem; height:18px">
                        <?php if(isset($error['phone'])): ?>
                            <div class="text-danger"><?php echo $error['phone']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>   

                <!-- Password -->
                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="margin-bottom: -26px; padding-right:60px;">
                    <span class="material-symbols-outlined show-password">visibility</span>
                    <!-- password error message -->
                    <div style="font-size: 0.9rem; height:18px">
                        <?php if(isset($error['password'])): ?>
                            <div class="text-danger"><?php echo $error['password']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
    
                <!-- Confirm Password -->
                <div class="mb-1">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmpassword" placeholder="Confirm password" style="margin-bottom: -26px; padding-right:60px;">
                    <span class="material-symbols-outlined show-confirm-password">visibility</span>
                    <!-- confirm password error message -->
                    <div style="font-size: 0.9rem; height:18px">
                        <?php if(isset($error['confirmpassword'])): ?>
                            <div class="text-danger"><?php echo $error['confirmpassword']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="mb-3">
                    <label for="t&c" class="d-flex align-items-start" style="cursor: pointer;">
                        <input type="checkbox" name="terms" id="t&c" class="me-2" style="margin-top: 3px;" value="1">
                        <p style="font-size: 12px; margin-bottom: 0;">
                            By clicking "Register", you agree to our 
                            <a href="./terms&condition.html" style="text-decoration: none; color:#8e2de2;">Terms of Service</a>, 
                            <a href="#" style="text-decoration: none; color:#8e2de2;">Privacy Policy</a>, 
                            and 
                            <a href="#" style="text-decoration: none; color:#8e2de2;">Cookies Policy</a>.
                            You may receive email notifications from us and can opt out at any time.
                        </p>
                    </label>
                    <!-- Terms & conditions error message -->
                    <div style="font-size: 0.9rem; height:18px">
                            <?php if(isset($error['terms'])): ?>
                                <div class="text-danger"><?php echo $error['terms']; ?></div>
                            <?php endif; ?>
                        </div>
                </div>
                <!-- submit button -->
                <input type="submit" class="btn btn-danger third-button" id="thirdPageButton" name="register" value="Register">
            
                <!-- Already have an account -->
                <div class="mt-2 text-center">
                    <a href="./login.php" class="text-dark text-decoration-none" id="#">Already have an account? <span style="color: #ff4e95;">login</span></a>
                </div>
                
            </form>
        </div>
    </div>
    
    <script src="./javascript/register.js"></script>
</body>
</html>
