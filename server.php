<?php
session_start();
//initializing variables
$username = "";
$password = "";
$email = "";
$errors = array();

// connect to the database
$host='r42ii9gualwp7i1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';                      // Put in your own Database hostname here
$user='lymr0r44gcueussj';     // Put in your own Username here - this can be found on webhost000 - manage Databases
$pass='pprn5zf6pol7k9nj';                    // Put in your own Password here
$db='zv2pdtowf7z5033j';       // Put in your Database name here - this can be found on phpmyadmin

$con =mysqli_connect($host,$user,$pass,$db);

//**********************************CUSTOMER INFO (customerinfo . php file)********************************************
// ADDING NEW CUSTOMER INFORMATION
if (isset($_POST['confirmcustomerinfo'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Customer ID is required"); }
    if (empty($password)) { array_push($errors, "Customer Name is required"); }
    if (empty($email)) { array_push($errors, "Customer Address is required"); }
    
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO `users` (`username`, `password`, `email`)
   VALUES('$username', '$password', '$email');";
        mysqli_query($con, $query);
    }//end if state for error count
  }//end first if state "isset post confirmCustomer..."

  ?>