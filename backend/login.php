<?php
include_once "init.php";
global $connection;

if(isset($_POST['sign_in'])) {
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    // check if the user exists in the database with the email
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // get the first result
    $result = $stmt->get_result();

    // check if result is returned
    if($result->num_rows === 1) {
        // fetch the result as an associative array
        $user = $result->fetch_assoc();

        // verify the password with the password in the database
        if(password_verify($password, $user['password'])) {
            // set session message
            $_SESSION['message'] = "You have successfully logged in!";
            $_SESSION['name'] = $user['full_name'];
            $_SESSION['logged_in'] = true;

            // redirect to the home page with the session
            header("Location: ../index.php");
            exit;
        }
    }

    $_SESSION['message'] = "Email or password is incorrect!";
    header("Location: ../login.php");

    // close the statement
    $stmt->close();
    // close the connection
    $connection->close();
}