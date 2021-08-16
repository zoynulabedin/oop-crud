<?php
require_once "classes/Users.php";
$user = new User();

if(isset($_POST['recored'])){
    $user->insert_user($_POST);
}
 $all_users = $user->allusers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop crud project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<div class="users mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-dark p-5 shadow-lg rounded">
                <form action="" method="POST">
                    <label for="name" class="col-sm-2 col-form-label text-light">Name</label>
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                    <label for="email" class="col-sm-2 col-form-label text-light">Email</label>
                    <input class="form-control" name="email" placeholder="Email" type="email">
                    <label for="pass" class="col-sm-2 col-form-label text-light">Email</label>
                    <input id="pass" name="password" class="form-control" placeholder="Password" type="password">
                    <input type="submit" class="btn btn-info mt-5" value="Recored" name="recored">
                </form>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="all-users">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $row = mysqli_fetch_assoc($all_users);
                    foreach( $row as $single){

                    ?>
                        <tr>

                            <th scope="row">1</th>
                            <td><?php echo $single['name'];?></td>
                            <td><?php echo $single['email'];?></td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                    <?php };?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>