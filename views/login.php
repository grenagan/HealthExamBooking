<!DOCTYPE html>
<html>
    <head>
        <title>Διάγνωση</title>
        <link rel="shortcut icon" href="/Diagnosi/microscope-solid.ico" type="image/x-icon"> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="mt-5 pt-5" style="overflow-x: hidden;">
        <nav class="navbar bg-dark navbar-dark fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="../index.php"><i class="fas fa-microscope mr-2"></i>Διάγνωση</a>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <form class="col-xs-12 col-sm-8 col-md-6 border bg-light"  action="../controllers/loginController.php" method="POST">
                    <h5 class="text-center mt-2">Σύνδεση</h5>
                    <div class="form-group">
                    <input type="email" class="form-control mt-3" id="InputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name = "loginSubmit" class="btn btn-primary mb-5">Login</button>
                    <a href="signup.html" class="btn btn-primary mb-5">SignUp</a>
                    <?php
                        if(isset($_GET['error']))
                        {
                            if($_GET['error'] == 'usernotexist')
                            {
                                echo '<span style="color: red;"> Δεν υπάρχει ο χρήστης!</span>';
                            }
                            elseif($_GET['error'] == 'wrongpass')
                            {
                                echo '<span style="color: red;"> Λάθος κωδικός!</span>';
                            }

                        } 
                    ?>
                </form>
            </div>
        </div>
        <footer class="page-footer bg-dark fixed-bottom">
            <div class="footer-copyright text-center text-white py-3">
                © 2020 Copyright: Διάγνωση ΑΕ
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/df97cf18c6.js" crossorigin="anonymous"></script>
    </body>
</html>
