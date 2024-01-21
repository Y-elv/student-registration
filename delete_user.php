<?php
include('./controller/userscontr.php');
include('./view/usersview.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $usersContr = new UsersContr();
    $usersContr->deleteUser($userId);

    // Redirect to index.php after deleting
    header("Location: index.php");
    exit();
} else {
    echo "Invalid request.";
}
?>