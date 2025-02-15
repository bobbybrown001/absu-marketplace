<?php
session_start();

// Include database connection
include("config/config.php");

$fullname = "";
$username = "";
$email = "";
$phone = "";
$pass = "";
$success = "";
$error = array();

if (isset($_POST['register'])){
    // sanitize user input
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone =  mysqli_real_escape_string($connection, $_POST['phone']);
    $pass = mysqli_real_escape_string($connection, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($connection, $_POST['confirmpassword']);

    $sql = "SELECT * FROM users where email='$email' ";

    $query = mysqli_query($connection, $sql);
    
    // Check if input is empty
    if (empty($fullname)) {
        array_push($error, "fullname is required");
        // $error['fullname'] = "Full name is required";
    }
    if (empty($username)) {
        array_push($error, "username is required");
    }
    if (empty($email)) {
        array_push($error, "email is required");
    }
    if (empty($phone)) {
        array_push($error, "phone number is required");
    }
    if (empty($pass)) {;
        array_push($error, "passwords is required");
    }
    // Check if passwords match
    if($pass !==  $confirmpassword){
        array_push($error, "Passwords do not match");
    }
    
    //if there are no errors in the form then continue
    if(count($error)==0){
        $password = password_hash($pass, PASSWORD_DEFAULT);

        //insert into the datadase
        $insert = "INSERT INTO users (fullname, username, email, phone, password)
                               VALUES('$fullname', '$username', '$email', '$phone', '$password')";

        if(mysqli_query($connection, $insert)){
            $success = "<span class='text-success'>Registered successfully</span>";
            // Redirect to login page after 5 seconds
            header("refresh:2; url=login.php");
            exit();
        }else{
            $success = "<span class='text-danger'>failed</span>";
        }
    }
}

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

    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>

    <title>User Register</title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto">
        
        <div class="collection col-9 col-lg-5" id="firstContainer">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="firstPageForm" autocomplete="off">
                <h1 class="text-center text-danger fw-bold">REGISTER</h1>
                <p class="text-center" style="font-size: 13px;">Create an account with us, it's quick and easy</p>
                <hr>
                <?php echo $success; ?>
                <?php
                    foreach($error as $errors){
                        echo "<p class='text-danger text-center'>".
                            $errors . "<br> </p>";
                    }
                ?>

                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Input full name">  
                         
                </div>
    
                <!-- User Name -->
                <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="userName" name="username" placeholder="Input Username">
                                 
                </div>
      
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Input email address" >
                    
                </div>
    
                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Input Phone Number">
                    
                </div>   

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    
                </div>
    
                <!-- Confirm Password -->
                <div class="mb-2">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmpassword" placeholder="Confirm password">
                    
                </div>

                <!-- Terms and Conditions -->
                <div class="mb-3">
                    <label for="t&c" class="d-flex align-items-start" style="cursor: pointer;">
                        <input type="checkbox" name="t&c" id="t&c" class="me-2" style="margin-top: 3px;">
                        <p style="font-size: 12px; margin-bottom: 0;">
                            By clicking "Register", you agree to our 
                            <a href="./terms&condition.html" class="text-primary" style="text-decoration: none;">Terms of Service</a>, 
                            <a href="#" class="text-primary" style="text-decoration: none;">Privacy Policy</a>, 
                            and 
                            <a href="#" class="text-primary" style="text-decoration: none;">Cookies Policy</a>.
                            You may receive email notifications from us and can opt out at any time.
                        </p>
                    </label>
                </div>
                <!-- submit button -->
                <input type="submit" class="btn btn-danger third-button" id="thirdPageButton" name="register" value="Register">
            
                <!-- Already have an account -->
                <div class="mt-2 text-center">
                    <a href="./login.php" class="text-dark text-decoration-none" id="#">Already have an account? <span class="text-primary">login</span></a>
                </div>
    
                <!-- Not yet Registered -->
                <div class="mt-2 text-center">
                    <a href="./agentregister.php" class="text-dark text-decoration-none" id="#">Want to become an Errand Agent? <span class="text-primary">Sign up here</span></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>