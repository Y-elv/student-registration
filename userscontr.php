<!-- update info inside database -->
<?php include('users.php');?>
<?php

class UsersContr extends Users{
    public function createUser($first_name,$last_name,$age){
       $this ->setUser($first_name,$last_name,$age);
    }

    public function updateUser($userId, $first_name, $last_name, $age){
        $users = new Users();
        $users->updateUser($userId, $first_name, $last_name, $age);
    }
    
}