<?php
$conn = mysqli_connect('localhost', 'root', '' );

    if($conn) {
      echo 'Connection Successful';
    }
    else{
      echo 'Connection Failed';
    }

    mysqli_select_db($conn, 'table2');

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['passwordNewUser'];
    $gender = $_POST['gender'];
    $telephone = $_POST['number'];
    $location = $_POST['locations'];

    $query = "INSERT INTO user2(first_name,	last_name,	email,	password,	telephone,	gender,	location	
) VALUES('$firstName', '$lastName', '$email', '$password', '$telephone', '$gender', '$location')";

    $results = mysqli_query($conn, $query);
    if($results){
      header('location: connect.php');
    }

?>