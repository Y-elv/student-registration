<?php
include('userscontr.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $userController = new UsersContr();

   $first_name = $_POST['f_name'];
   $last_name = $_POST['l_name'];
   $age = $_POST['age'];

   $userController->createUser($first_name, $last_name, $age);

   // Redirect or display a success message
   header("Location: index.php");
   exit();
}
?>
