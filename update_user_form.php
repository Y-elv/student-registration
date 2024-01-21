<?php
include('userscontr.php');
include('usersview.php');
// update_user_form.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    // Form is submitted, process the update

    $userId = $_POST['id'];
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $age = $_POST['age'];

    $usersContr = new UsersContr();
    $usersContr->updateUser($userId, $first_name, $last_name, $age);

    // Redirect to index.php or any other page after updating
    header("Location: index.php");
    exit();
} else {
    // Display the update form

    // Fetch user details based on the id
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        $usersView = new UsersView();
        $userDetails = $usersView->getUserDetails($userId);

        if ($userDetails) {
            // Display the update form
?>
            <!-- Your HTML form for updating user -->
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $userDetails['id']; ?>">

                <div class="form-group">
                    <label for="f_name">First Name</label>
                    <input type="text" name="f_name" class="form-control" value="<?php echo $userDetails['first_name']; ?>">
                </div>

                <div class="form-group">
                    <label for="l_name">Last Name</label>
                    <input type="text" name="l_name" class="form-control" value="<?php echo $userDetails['last_name']; ?>">
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" class="form-control" value="<?php echo $userDetails['age']; ?>">
                </div>

                <input type="submit" class="btn btn-success" name="update_user" value="UPDATE">
            </form>
<?php
        } else {
            echo "User not found.";
        }
    } else {
        echo "Invalid request.";
    }
}
?>
