<?php
class User{
    private $username, $email, $password,$connectionResource;
    
    function __construct() {
        #connection establish
        include 'db.php';
        $this->connectionResource = db::connect();
    }

    function existUser($username){
        $result=mysqli_query($this->connectionResource, "SELECT count(*) as total from user_table where username='$username'");
        $data=mysqli_fetch_assoc($result);
        if($data['total']>0)return true;
        return false;
    }

    public function insertUser($username, $email, $password){
        if($this->existUser($username)==true){
            echo "Userame Already Taken";
            return;
        }

        $query="INSERT INTO user_table(username,email,password) VALUES('$username','$email','$password')";
 	    $run=mysqli_query($this->connectionResource,$query);
        if($run) echo "Inserted Successfully";
        else echo "Error: " . $query . "<br>" . mysqli_error($this->connectionResource);
    }
}   
?>