<?php

// logout and destroy session
session_start();
session_destroy();

// redirect to the login page
header("Location: ../index.php");