<?php
include 'User.php';
include 'Connection.php';

if(isset($_POST)){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];

    $user = new User($f_name,$l_name,$email);

    $new_user = new Connection();
    $columns = 'f_name,l_name,email';
    $values = "'".$user->getFirstName()."', '".$user->getLastName()."', '".$user->email."'";
  
    $new_user->insert('users',$columns,$values);
    header('Location: index.php');
}