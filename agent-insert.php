<?php

// Include database connection
include("config/config.php");

if (isset($_POST["fullname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["phone"])  && isset($_POST["dob"]) && isset($_POST["gender"]) && isset($_POST["address"]) && isset($_POST["addressName"]) && isset($_POST["roomNumber"]) && isset($_POST["Status"]) && isset($_POST["department"]) && isset($_POST["level"]) && isset($_POST["password"])) {
    // sanitize agent password
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone =  mysqli_real_escape_string($connection, $_POST['phone']);
    $dob =  mysqli_real_escape_string($connection, $_POST['dob']);
    $gender =  mysqli_real_escape_string($connection, $_POST['gender']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $addressName = mysqli_real_escape_string($connection, $_POST['addressName']);
    $roomNumber = mysqli_real_escape_string($connection, $_POST['roomNumber']);
    $status = mysqli_real_escape_string($connection, $_POST['Status']);
    $department = mysqli_real_escape_string($connection, $_POST['department']);
    $level = mysqli_real_escape_string($connection, $_POST['level']);
    $pass = mysqli_real_escape_string($connection, $_POST['password']);


    //if there are no errors in the form then continue
    // if(count($error) === 0){
        //encrypt password
        $password = password_hash($pass, PASSWORD_DEFAULT);

        //insert into the datadase
        $insert = "INSERT INTO agents (fullname, username, email, phone, dob, gender, address, addressname, roomnumber, status, department, level,  password)
                            VALUES('$fullname', '$username', '$email', '$phone', '$dob', '$gender', '$address', '$addressName', '$roomNumber', '$status', '$department', '$level', '$password')";

        if (mysqli_query($connection, $insert)) {
            $success = "<span class='text-success'>Registered Successfully</span>";
            // Redirect to login page after 3 seconds
            // header("refresh:3; url=login.php");
            echo json_encode(array('message'=> $success, 'status'=> 'success'));
            exit();
        } else {
            $success = "<span class='text-danger'>Failed to register. Please try again.</span>";
            echo json_encode(array('message'=> $success, 'status'=> 'error'));
        }
    // }
}

?>