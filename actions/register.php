<?php
include "../classes/user.php";  //go outside from here and go into classes and user.php inside of it.

//collect the form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

//create an object
$user = new User;

//call the method
$user->createUser($first_name, $last_name, $username, $password);

?>