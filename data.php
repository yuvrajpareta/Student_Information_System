<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','sis');
    if($conn->connect_error)
    {
        die('Connection Failed'. $conn->connect_error);
    }
    else
        {
            $s = $conn->prepare("Insert into login(email, password) values(?,?)");
            $s->bind_param("ss", $email, $password);
            $exe = $s->execute();
            echo " Registration is Successfull!!";
            $s->close();
            $conn->close();
        }
?>