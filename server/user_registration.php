<?php
#connection establish
include 'classes/user.php';

$usernameInfo=$_POST['username'];
$emailInfo=$_POST['email'];
$passwordInfo=$_POST['password'];

$user=new User;
$user->insertUser($usernameInfo,$emailInfo,$passwordInfo);
/*
if(isset($_POST['submit']))
{
 	$nameInfo=$_POST['name'];
 	$emailInfo=$_POST['email'];
 	$passwordInfo=$_POST['password'];

 	$query="INSERT INTO user_table(name,email,password) VALUES('$nameInfo','$emailInfo','$passwordInfo')";
 	$run=mysqli_query($connectionResource,$query);

 	if($run)
 	{
 		echo "Inserted Successfully";
 	}
 	else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
 
}
mysqli_close($connectionResource);
*/
?>