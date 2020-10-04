<?php

    include_once "../classes/dbConnection.php";
    if(isset($_POST["loginSubmit"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $db = new Db();
        $conn = $db->connect();

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // prepare sql and bind parameters
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=? ");
        
        $stmt->execute([$email]);
        // set the resulting array to associative
        if( $row = $stmt->fetch(PDO::FETCH_ASSOC))
        {

            if(password_verify($password,$row['pwd']))
            {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $row['email'];
                header("Location: ../index.php");                

            }
            else
            {
                header("Location: ../views/login.php?error=wrongpass");
                
            }
        }
        else
        {
            header("Location: ../views/login.php?error=usernotexist");
        }


    }