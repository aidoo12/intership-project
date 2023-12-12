<?php
ob_start(); // turn on output buffering (to prevent header errors before reading the whole page)
session_start(); // start the session

include_once 'database.php';
