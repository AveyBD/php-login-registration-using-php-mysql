<?php
class User{
    private $username, $email, $password,$connectionResource;

    function __construct() {

        include 'db.php';
        $this->connectionResource = db::connect();
    }

    function existUser($username){
        $result=mysqli_query($this->connectionResource, "SELECT count(*) as total from user_table where username='$username'");
        $data=mysqli_fetch_assoc($result);
        if($data['total']>0)return true;
        return false;
    }
    function checkpass($password){
      $passc=mysqli_query($this->connectionResource, "SELECT count(*) as total from user_table where password='$password'");
      $data=mysqli_fetch_assoc($passc);
      if($data['total']>0)return true;
      return false;
    }

    public function insertUser($username, $password){
        if($this->existUser($username)==true){
            if($this->checkpass($password)==true){
              echo "Logged In";
            }
            return;
        }

     echo "Login Faild";

    }
}
?>
