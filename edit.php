<?php
require_once "classes/Users.php";
$user = new User();
$id = $_GET['id'];

$data = $user ->updateuser($id);
$data = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){
    $user->updateuser_save($_POST);
}
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
                    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                    <label for="name" class="col-sm-2 col-form-label text-light">Name</label>
                    <input class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $data['name'];?>" type="text">
                    <label for="email" class="col-sm-2 col-form-label text-light">Email</label>
                    <input class="form-control" name="email" placeholder="Email" value="<?php echo $data['email'];?>" type="email">
                    <input type="submit" class="btn btn-info mt-5" value="Update" name="update">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
