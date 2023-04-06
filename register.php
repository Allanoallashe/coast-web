<?php
$conn = mysqli_connect('localhost', 'root', '' );

    if($conn) {
      echo 'Connection Successful &#10004;';
    }
    else{
      echo 'Connection Failed !!!';
    }

    mysqli_select_db($conn, 'table2');

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['passwordNewUser'];
    $gender = $_POST['gender'];
    $telephone = $_POST['number'];
    $location = $_POST['locations'];

    $query = "INSERT INTO user2(first_name,	last_name,	email,	password,	telephone,	gender,	location) 
    VALUES('$firstName', '$lastName', '$email', '$password', '$telephone', '$gender', '$location')";

    $results = mysqli_query($conn, $query);
    if($results){
      header('location:connect.php');
    }


      

//     // Set Error Handler

// set_error_handler (
//     function($errno, $errstr, $errfile, $errline) {
//         throw new ErrorException($errstr, $errno, 0, $errfile, $errline);     
//     }
// );


// // Trigger an exception in a try block

// try {
//     $a = 3/0;
//     echo $a;
// }
// catch(Exception $e) {
//     echo 'Message: the email already exist ' .$e->getMessage();
// }

// echo '<script type="text/javascript">

//             window.onload = function () { alert("Welcome to to the beautiful coast"); }

//     </script>';

?>