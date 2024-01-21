<!-- shows data on websites -->
<?php include_once('./modal/users.php');?>

<?php

class UsersView extends Users {

    public function showAllUsers() {
        $results = $this->getAllUser();
        return $results;

     
       
    }

    public function getUserDetails($userId) {
        $sql = "SELECT * FROM students WHERE id = ?";
        $data = $this->connect()->prepare($sql);
        $data->execute([$userId]);
        $userDetails = $data->fetch();
        return $userDetails;
    }

}


?>
