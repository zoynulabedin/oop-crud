<?php 

class User{

    public function __construct(){
       $localhost = "localhost:3325:4306";
       $user  = "root";
       $pass = "";
       $db_name = "oop";


     $this->link = mysqli_connect($localhost,$user,$pass,$db_name);


    }

    public function insert_data($data){
       $name = $data['name'];
       $email = $data['email'];
        $pass = $data['password'];

        $query = "INSERT INTO `users`(name`, `email`, `password`) VALUES ('$name','$email','$pass')";
      mysqli_query($this->link,$query);
    }

}