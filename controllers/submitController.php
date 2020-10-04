<?php
    session_start();
    

        include_once "../classes/submitTest.php";

        $submit = new submitTest();

        $email = $_SESSION['email'];
        if(!empty($_POST['tests']))
        {
            $tests = $_POST['tests'];
        }
       
        $date = $_POST['date'];
        $totalValue = $_SESSION['totals'];
        $paymentMethod = $_POST['paymentMethod'];

        $submit.CreateTest($email,$date,$totalValue,$paymentMethod,$tests);






    
    ?>