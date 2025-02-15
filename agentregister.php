<?php
// session_start();

// Include database connection
// include("config/config.php");

// // Initialize variables
// $fullname = "";
// $username = "";
// $email = "";
// $phone = "";
// $dob = "";
// $gender = "";
// $address = "";
// $addressName = "";
// $roomNumber = "";
// $status = "";
// $department = "";
// $level = "";
// $password = "";
// $success = "";
// $error = array();

// // FOR FIRST PAGE
// // if agent clicks on next
// if (isset($_POST["firstPageNext"])) {
//     // sanitize agent input
//     $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
//     $username = mysqli_real_escape_string($connection, $_POST['username']);
//     $email = mysqli_real_escape_string($connection, $_POST['email']);
//     $phone =  mysqli_real_escape_string($connection, $_POST['phone']);
//     $dob =  mysqli_real_escape_string($connection, $_POST['dob']);
//     $gender =  mysqli_real_escape_string($connection, $_POST['gender']); 

//     // filter agent input
//     $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
//     $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
//     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//     $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    
//     // Validate agent input
//     // $fullname = filter_input(INPUT_POST, 'fullname', FILTER_VALIDATE_SPECIAL_CHARS);
//     // $username = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_CHARS);
//     $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//     $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);

//     // Check if input is empty
//     if (empty($_POST["fullname"])) {
//         array_push($error, "Full name is required");
//     }
//     if (empty($_POST["username"])) {
//         array_push($error, "Username is required");
//     }
//     if (empty($_POST["email"])) {
//         array_push($error, "Email is required");
//     }
//     if (empty($_POST["phone"])) {
//         array_push($error, "Phone number is required");
//     }
//     if (empty($_POST["dob"])) {
//         array_push($error, "Date of birth is required");
//     }
//     if (empty($_POST["gender"])) {
//         array_push($error, "Gender is required");
//     }
//     if (empty($_POST['fullname']) && empty($_POST["gender"])) {
//         $next = true;
//     }
//     // check if username as been taken
//     if (mysqli_num_rows($username) > 0) {
//         array_push($error, "Username has been taken");
//     }
//     // Check if email already exists
//     $sql = "SELECT * FROM agents WHERE email = ?";
//     $stmt = $connection->prepare($sql);
//     $stmt->bind_param("s", $_POST["email"]);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if ($result->num_rows > 0) {
//         array_push($error, "Email already exists");
//     }
// }





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="./css/agentregister.css">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    
    <!--jquery cdn-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Agent Register</title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto">

        <!-- First Page Form -->
        <div class="collection col-9 col-lg-6" id="firstContainer">
            <form action="" method="post" id="firstPageForm" autocomplete="off">
                <h1 class="text-center text-danger fw-bold">REGISTER AS AN AGENT</h1>
                <p class="text-center" style="font-size: 13px;">Create an account with us, it's quick and easy</p>
                <hr>
                <!-- <?php echo $success; ?> -->
                <?php
                    // foreach($error as $errors){
                    //     echo "<p class='text-danger text-center'>".
                    //     $errors . "<br> </p>";
                    // }
                ?>

                
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name: </label>
                    <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Input full name" value="">             
                </div>
    
                <!-- User Name -->
                <div class="mb-3">
                    <label for="username" class="form-label">User Name: </label>
                    <input type="text" class="form-control" id="userName" name="username" placeholder="Input Username" value="">             
                </div>
    
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Input email address" value="">
                </div>
    
                 <!-- Phone Number -->
                 <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number: </label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Input Phone Number" value="">
                </div>
    
                <!-- Date of birth -->
                <div class="mb-2">
                    <label for="dob">Date of birth: </label>
                    <input type="date" name="dob" id="dob" class="form-control" value="">
                </div>
    
                <!-- Gender -->
                <div class="mb-2">
                    <label for="male" class="form-label">Gender:</label>
                    <input type="radio" name="gender" id="male" class="gender-option" value="Male"> Male
                    <input type="radio" name="gender" id="female" class="gender-option" value="Female"> Female
                </div>

                <!-- Button -->
                <button type="button" class="btn btn-danger mt-2 first-button" id="firstPageButton" name="firstPageNext">
                    Next
                </button>

                <!-- Already have an account -->
                <div class="mt-2 text-center">
                    <a href="#" class="text-dark text-decoration-none" id="#">Already have an account? <span class="text-primary">login</span></a>
                </div>
    
                <div class="mt-2 text-center">
                    <a href="#" class="text-dark text-decoration-none" id="#">Want to become an Errand User? <span class="text-primary">Sign up here</span></a>
                </div>
            </form>
        </div>





        <!-- Second Page Form -->
        <div class="collection col-9 col-lg-6" id="secondContainer" style="display: none;">
            <form action="" method="post" id="secondPageForm" autocomplete="off">            
                <h1 class="text-center text-danger fw-bold">REGISTER AS AN AGENT</h1>
                <p class="text-center" style="font-size: 13px;">Create an account with us, it's quick and easy</p>
                <hr>
                <!-- <?php echo $success; ?> -->
                <?php
                    // foreach($error as $errors){
                    //     echo "<p class='text-danger text-center'>".
                    //     $errors . "<br> </p>";
                    // }
                ?>

    
                <!-- Address -->
                <div class="mb-2">
                    <label for="address">Address: </label>
                    <select name="address" id="address" class="form-control" value="">
                        <option value="#">--select--</option>
                        <option value="hostel">Hostel</option>
                        <option value="lodge">Lodge</option>
                    </select>
                </div>
    
                <!-- Address Name -->
                <div class="mb-2">
                    <label for="address-name">hostel/lodge name</label>
                    <input type="text" class="form-control" id="addressName" name="addressName" value="">
                </div>
    
                <!-- Room Number -->
                <div class="mb-2">
                    <label for="room-number">Room number: </label>
                    <input type="number" class="form-control" id="roomNumber" name="roomNumber" value="">
                </div>
    
                <!-- Status -->
                <div class="mb-2">
                    <label for="status">Status: </label>
                    <select name="status" id="status" class="form-control" value="">
                        <option value="#">--select--</option>
                        <option value="undergraduate">undergraduate</option>
                        <option value="graduate">graduate</option>
                        <option value="postgraduate">postgraduate</option>
                        <option value="staff">staff</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Diploma/Certificate">Diploma/Certificate</option>
                        <option value="other">other</option>
                    </select>
                </div>
    
                <!-- Department -->
                <div class="mb-2">
                    <label for="department">Department: </label>
                    <!-- <input type="text" class="form-control" id="department" placeholder="Please select your department"> -->
                    <select name="department" id="department" class="form-control" value="">
                        <option value="#">--select--</option>
                        <option value="Accountancy/Accounting">Accountancy/Accounting</option>
                        <option value="Agricultural Economics and Extension">Agricultural Economics Extension</option>
                        <option value="Agricultural Economics and Education">Agricultural Economics Education</option>
                        <option value="Anatomy">Anatomy</option>
                        <option value="Animal Science/Fishery">Animal Science/Fishery</option>
                        <option value="Architecture">Architecture</option>
                        <option value="Banking and Finance">Banking and Finance</option>
                        <option value="Biochemisty">Biochemisty</option>
                        <option value="Botany">Botany</option>
                        <option value="Business Administration">Business Administration</option>
                        <option value="Business Education">Business Education</option>
                        <option value="Business Education">Business Education</option>
                        <option value="Chemistry and Chemical Engineering">Chemistry and Chemical Engineering</option>
                        <option value="civil engineering">civil engineering</option>
                        <option value="computer engineering">computer engineering</option>
                        <option value="computer science">computer science</option>
                        <option value="crop roduction and protection">crop roduction and protection</option>
                        <option value="Economics">Economics</option>
                        <option value="Education/Fine art">Education/Fine art</option>
                        <option value="Education Accounting">Education Accounting</option>
                        <option value="Education Biology">Education Biology</option>
                        <option value="Education Chemistry">Education Chemistry</option>
                        <option value="Education Government">Education Government</option>
                        <option value="Education and integrated science">Education and integrated science</option>
                        <option value="Education and mathematics">Education and mathematics</option>
                        <option value="Education and physics">Education and physics</option>
                        <option value="Education and political science">Education and political science</option>
                        <option value="Education and social science">Education and social science</option>
                        <option value="Education Manaagement and planning">Education Manaagement and planning</option>
                        <option value="Electrical and electronic engineering">Electrical and electronic engineering</option>
                        <option value="English language and literature">English language and literature</option>
                        <option value="Enveromental resources Manaagement">Enveromental resources Manaagement</option>
                    </select>
                </div>
    
                <!-- level -->
                <div class="mb-2">
                    <label for="level">Level: </label>
                    <select name="level" class="form-control" id="level" value="">
                        <option value="#">--select--</option>
                        <option value="100">100 Level</option>
                        <option value="200">200 Level</option>
                        <option value="300">300 Level</option>
                        <option value="400">400 Level</option>
                        <option value="500">500 Level</option>
                        <option value="600">600 Level</option>
                    </select>
                </div>

                <div>
                    <!-- Back Button -->
                    <button type="button" id="backButton2" class="btn btn-primary back-button2">
                        <i class="fa-solid fa-arrow-left"></i>
                        Back
                    </button>
                    <!-- Next Button -->
                    <button type="button" class="btn btn-danger second-button" id="secondPageButton" name="secondPageNext">
                        Next  <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

                <!-- Already have an account -->
                <div class="mt-2 text-center">
                    <a href="#" class="text-dark text-decoration-none" id="#">Already have an account? <span class="text-primary">login</span></a>
                </div>
    
                <div class="mt-2 text-center">
                    <a href="#" class="text-dark text-decoration-none" id="#">Want to become an Errand User? <span class="text-primary">Sign up here</span></a>
                </div>
            </form>
        </div>




        <!-- Third Page Form -->
        <div class="collection col-9 col-lg-6" id="thirdContainer" style="display: none;">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="thirdPageForm" autocomplete="off">
                <h1 class="text-center text-danger fw-bold">REGISTER AS AN AGENT</h1>
                <p class="text-center" style="font-size: 13px;">Create an account with us, it's quick and easy</p>
                <hr>
                <!-- message -->
                <div class="mb-3" id="message"></div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
    
                <!-- Confirm Password -->
                <div class="mb-2">
                    <label for="confirmPassword" class="form-label">Confirm Password: </label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmpassword" placeholder="Confirm password">
                </div>
    
                <!-- Forget Password -->
                <div class="mb-3">
                    <a href="#" class="text-decoration-none" id="forget-password">Forget Password?</a>
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
                
                <!-- Back button -->
                <button type="button" id="backButton3" class="btn btn-primary back-button3">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back
                </button>
                <!-- submit button -->
                <button type="button" class="btn btn-danger third-button"id="thirdPageButton" name="submit">
                    Register
                </button>

                <!-- Already have an account -->
                <div class="mt-2 text-center">
                    <a href="./login.php" class="text-dark text-decoration-none" id="#">Already have an account? <span class="text-primary">login</span></a>
                </div>
                
                <!-- Not yet Registered -->
                <div class="mt-2 text-center">
                    <a href="./register.php" class="text-dark text-decoration-none" id="#">Want to become an Errand User? <span class="text-primary">Sign up here</span></a>
                </div>
            </form>
        </div>
    </div>

    <script src="./javascript/register.js"></script>
</body>
</html>