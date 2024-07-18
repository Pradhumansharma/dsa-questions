<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbConnection.php');

// stripslashes function can be used to clean up data retrieve from the database or from the HTML form

//php 


$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];

if (!empty($name) && !empty($email) && !empty($password)) {
    $sql = "INSERT INTO student(name,email,password) VALUES ('$name','$email','$password')";
    if ($conn->query($sql) == TRUE) {
        echo "Student Saved Successfully";
    } else {
        echo "unable to save student";
    }
} else {
    echo "Fill all fields!";
}
