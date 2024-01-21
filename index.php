<?php include('usersview.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
   <h1 id="main-title">CRUD APPLICATION IN PHP</h1>
 <div class="container">

  <div class="box1">
    <h2>ALL STUDENTS</h2>
    <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD STUDENT</button>
  </div>
   <table class="table table-hover table-bordered table-striped">
   <thead>
    <tr>
     <th>id</th>
     <th>first name</th>
      <th>last name</th>
     <th>age</th>
     </tr>
    </thead>
    <tbody>
    <?php

                $usersView = new UsersView();
                $users = $usersView -> showAllUsers();
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['first_name'] . "</td>";
                    echo "<td>" . $user['last_name'] . "</td>";
                    echo "<td>" . $user['age'] . "</td>";
                    echo "<td><a href='update_page1.php?id=" . $user['id'] . "' class='btn btn-success'>Update</a> </td>";
                    echo "<td><a href='delete_page1.php?id=" . $user['id'] . "' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
                
                ?>

    </tbody>
    </table>

   </div>
   </div>
    
</body>
</html>

