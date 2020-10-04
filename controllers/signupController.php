<?php
    if(isset($_POST["signupSubmit"])){
        include_once "../classes/signUp.php";

        $signup = new SignUp();
        $hashedPass = password_hash($_POST['password'],PASSWORD_DEFAULT);
        try
        {
            $signup->CreateUser($_POST['email'],$_POST['first_name'],$_POST['last_name'],$_POST['phone'],$hashedPass);
            

            $_SESSION['msg'] =  "Εγγραφήκατε επιτυχώς! <br><br>";
            header("Location: ../views/successFailView.php");

        }
        catch(Exception $ex)
        {
            $_SESSION['msg']  = "Αποτυχία εγγραφής! <br>".$ex->getMessage()."<br><br>"; 
            header("Location: ../views/successFailView.php");
        }
    }
    ?>