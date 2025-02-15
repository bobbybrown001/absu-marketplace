<?php
session_start();

//database connection 
include("config/config.php");
// include("./config/config.php");

$email = "";
$success = "";
$error = array();

//if form is submitted
if(isset($_POST['agentlogin'])){
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
        $sql = "SELECT * FROM agents where email='$email' "; 
        
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
                    header("location: user-dashboard.html");
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
