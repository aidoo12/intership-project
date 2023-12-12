<?php
include_once "init.php";
global $connection;

if(isset($_POST['sign_up'])){
    $full_name = trim($_POST['name']);
    $email     = trim($_POST['email']);
    $password  = trim($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //check if the user exists in the database with the email
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows === 1) {
        $_SESSION['user_exists_message'] = "User with this email already exists!";
        header("Location: ../signup.php");
        exit;
    }

    // Insert record into the database
    $query = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sss", $full_name, $email, $hashed_password);
    $stmt->execute();

    //check if the record is inserted successfully
    if($stmt->affected_rows === 1) {
        //set session
        $_SESSION['message'] = "You have successfully signed up!";
        $_SESSION['name'] = $full_name;
        $_SESSION['logged_in'] = true;

        // redirect to the home page with the session
        header("Location: ../index.php");
    } else {
        echo "Error: " . $connection->error;
    }

    //close the statement
    $stmt->close();
    //close the connection
    $connection->close();
}