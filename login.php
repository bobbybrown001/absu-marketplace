<?php
session_start();

//database connection file
include("config/config.php");

$email = "";
$success = "";
$error = array();

//if form is submitted
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pass = mysqli_real_escape_string($connection, $_POST['password']);
    
    //lets check for erros in the fields
    if(empty($email)){
        array_push($error, "email cannot be empty");
    }
    if(empty($pass)){
        array_push($error, "password cannot be empty");
    }
    
    /*if there are no errors in the form then 
    fetch the user data from the database */
    
    if(count($error)==0){
        //check for user data 
        $sql = "SELECT * FROM users where email='$email' "; 
        
        $query = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($query)>0){

            while($row = mysqli_fetch_assoc($query)){
                //encrypt password verification
                if (password_verify($pass, $row['password'])) {
                    echo 'Password is valid!';
                    //add user details to a session and send user to dashboard
                    $_SESSION['fullname'] = $row['fullname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['userid'] = $row['id'];
                    header("location: user/user-dashboard.html");
                } else {
                    array_push($error, "Invalid password");
                }
            }
        }else{
            $success = "<span class='text-danger'>Invalid email or password</span>";
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
    <link rel="stylesheet" href="./css/login.css">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    
    <title>Login</title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto">
    
        <!-- User Login -->
        <div class="collection  col-9 col-md-6 col-lg-4" id="userContainer">
            <form class="login-form" method="post" action="login.php">
                <h1 class="text-center text-danger fw-bold">LOGIN AS</h1>

                <?php echo $success; ?>
                <?php
                    foreach($error as $errors){
                        echo "<p class='text-danger text-center'>".
                            $errors . "<br> </p>";
                    }
                ?>

                <!-- Login as User or Agent -->
                <ul class="nav nav-underline justify-content-center" id="login-User-Agent">
                    <li class="nav-item">
                        <a class="nav-link text-dark active" href="#">USER</a>
                    </li>
                    <li class="nav-item" id="agentLogin">
                        <a class="nav-link text-dark" href="#">AGENT</a>
                    </li>
                </ul>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address: </label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                </div>

                <!-- Password -->
                <div class="mb-2">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <!-- Forget Password -->
                <div class="mb-3">
                    <a href="#" class="list-style-none" id="forget-password">Forget Password?</a>
                </div>

                <!-- Login button -->
                <button type="submit" name="login" class="btn btn-danger mb-2">LOGIN</button>

                <!-- Not yet Registered -->
                <div class="text-center mt-3">
                    <a href="./register.php" class="text-dark list-style-none " id="not-yet-register">Not yet registered? <span class="text-primary">Register</span></a>
                </div>
            </form>
        </div>




        <!-- Agent login -->
        <div class="collection" id="agentContainer" style="display: none;">
            <form class="login-form" method="post" action="login.php">
                <h1 class="text-center text-danger fw-bold">LOGIN AS</h1>

                <?php echo $success; ?>
                <?php
                    foreach($error as $errors){
                        echo "<p class='text-danger text-center'>".
                            $errors . "<br> </p>";
                    }
                ?>

                <!-- Login as User or Agent -->
                <ul class="nav nav-underline justify-content-center" id="login-User-Agent">
                    <li class="nav-item" id="userLogin">
                        <a class="nav-link text-dark" href="#">USER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark active" href="#">AGENT</a>
                    </li>
                </ul>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address: </label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                </div>

                <!-- Password -->
                <div class="mb-2">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <!-- Forget Password -->
                <div class="mb-3">
                    <a href="#" class="list-style-none" id="forget-password">Forget Password?</a>
                </div>

                <!-- Login button -->
                <button type="submit" name="agentlogin" class="btn btn-danger mb-2">LOGIN AS AGENT</button>

                <!-- Not yet Registered -->
                <div class="text-center mt-3">
                    <a href="./register.php" class="text-dark list-style-none" id="not-yet-register">Not yet registered? <span class="text-primary">Register</span></a>
                </div>
            </form>
        </div>
    </div>
        

<!-- javascript link-->
<script src="./javascript/login.js"></script>
</body>
</html>