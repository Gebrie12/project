<?php 

require_once 'php_action/core.php';

session_unset(); 

// destroy the session 
session_destroy(); 

header('location: index.php');	

?>