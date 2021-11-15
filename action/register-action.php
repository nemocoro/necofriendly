<?php
    include '../class/user.php';

    if( isset($_POST["submit"]) )
    {
        //INPUT
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $postal_code = $_POST["postal_code"];
        $address = $_POST["address"];
        $contact_no = $_POST["contact_number"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        //Instantiate
        $user = new User();

        //method call
        $user->register($firstname,$lastname,$postal_code,$address,$contact_no,$username,$password);
    }
?>