<?php
#connection establish
include 'classes/usercheck.php';

$usernameInfo=$_POST['username'];
$passwordInfo=$_POST['password'];

$user=new User;
$user->insertUser($usernameInfo,$passwordInfo);
