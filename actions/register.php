<?php

include "../classes/User.php";

//create ab object
$user = new User;

//call the method
$user->store($_POST);
//$_POST holds all the data from the form in views/register.php 