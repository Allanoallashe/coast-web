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
      header('location:connection.php');
    }




        $fisrtNameErr = $emailErr = $genderErr = $passwordErr = $lastNameErr = $telephoneErr = $locationErr = "";
        // $name = $email = $gender = $comment = $website = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["first-name"])) {
        $fisrtNameErr = "First name is required!";
      } else {
        $firstName = test_input($_POST["first-name"]);
      }

      if (empty($_POST["last-name"])) {
        $lastNameErr = "Last name is required!";
      } else {
        $lastName = test_input($_POST["last-name"]);
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required!";
      } else {
        $email = test_input($_POST["email"]);
      }

      if (empty($_POST["passwordNewUser"])) {
        $passwordErr = "Password is required!";
      } else {
        $password = test_input($_POST["passwordNewUser"]);
      }

      if (empty($_POST["number"])) {
        $telephoneErr = "telephone is required";
      } else {
        $telephone = test_input($_POST["number"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "";
      } else {
        $gender = test_input($_POST["gender"]);
      }

      if (empty($_POST["locations"])) {
        $locationErr = "";
      } else {
        $location = test_input($_POST["locations"]);
      }

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