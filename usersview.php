<!-- shows data on websites -->
<?php include('users.php');?>

<?php

class UsersView extends Users {

    public function showAllUsers() {
        $results = $this->getAllUser();

        return $results;

     
       
    }

}


?>
