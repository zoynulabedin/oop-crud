<?php

class User{

    public function __construct(){
        $host = "localhost:3325:4306";
        $user = "root";
        $pass = "";
        $db = "oop";

        $this->link = mysqli_connect($host,$user,$pass,$db);
    }

    public function insert_user($data){
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        mysqli_query($this->link,$query);
    }

    public function allusers(){
      return  mysqli_query($this->link,"SELECT * FROM 'users'");
    }
}