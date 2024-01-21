<!-- update info inside database -->
<?php include('users.php');?>
<?php

class UsersContr extends Users{
    public function createUser($first_name,$last_name,$age){
    
        $this ->setUser($first_name,$last_name,$age);
    }
    
}