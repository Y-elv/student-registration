<!-- deal with database connection -->
<?php include('db.php');?>

<?php


class Users extends Db {

    protected function getAllUser(){
        $sql = "SELECT * FROM students";
        $data = $this->connect()->prepare($sql);
        $data->execute();
        $results = $data->fetchAll();
        return $results ;
    }

    protected function setUser($first_name,$last_name,$age){
        $sql="INSERT INTO students(first_name,last_name,age) VALUES (?,?,?)";
        $data = $this->connect()->prepare($sql);
        $data->execute([$first_name, $last_name ,$age]);
   


       
    }

    protected function updateUser($id, $first_name, $last_name, $age){
        $sql = "UPDATE students SET first_name = ?, last_name = ?, age = ? WHERE id = ?";
        $data = $this->connect()->prepare($sql);
        $data->execute([$first_name, $last_name, $age, $id]);
    }
    
}