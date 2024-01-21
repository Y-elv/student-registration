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

   <!-- Modal -->
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <div class="form-group">
            <label for="f_name">First Name</label>
            <input type="text"name="f_name"class="form-control">
          </div>

          <div class="form-group">
            <label for="l_name">Last Name</label>
            <input type="text"name="l_name"class="form-control">
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="text"name="age"class="form-control">
          </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success"name="add_student"value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

