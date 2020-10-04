<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Διάγνωση</title>
        <link rel="shortcut icon" href="/Diagnosi/microscope-solid.ico" type="image/x-icon"> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="overflow-x: hidden;">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="index.html"><i class="fas fa-microscope mr-2"></i>Διάγνωση</a>

                 <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <?php 
                         if(isset($_SESSION['loggedin']))
                         {
                             echo '<ul class="navbar-nav ml-auto">
                                   <li class="nav-item"><label class="nav-link" >'.$_SESSION['email'].'</li>
                                   <li class="nav-item"><a class="nav-link" href="controllers/logoutController.php">Logout</a></li>
                                   </ul>';
                         }
                         else
                         {
                            echo '<ul class="navbar-nav ml-auto">
                                  <li class="nav-item"><a class="nav-link" href="views/login.php">Login</a></li>
                                  <li class="nav-item"><a class="nav-link" href="views/signup.php">SignUp</a></li>
                                  </ul>';
                         }
                         ?>
                    
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-0 col-md-2" ></div>
            <div class="col-xs-12 col-md-8">
                <div class="jumbotron d-flex justify-content-center container" style="background-image: url(background2.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="text-center" style="background:rgba(255, 250, 250,0.6); height:70%; width:50%; border-radius: 25px;">
                            <h3 class="mt-4">Προγραμματίστε τις εξετάσεις σας online!</h3>
                            <?php 
                                if(isset($_SESSION['loggedin']))
                                {
                                    echo '<a class="btn btn-primary btn-lg mb-2" href="views/testArrange.php" role="button">Επιλογή Εξετάσεων</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-lg mb-2 disabled" href="#" role="button">Επιλογή Εξετάσεων</a>';
                                }
                            ?>
                    </div>
       
                </div>
                <div class="row d-flex justify-content-center">
                    <h4>Όμιλος Διάγνωση</h4>
                    <p class="ml-3 mr-3"> Ο όμιλος ΔΙΑΓΝΩΣΗ αποτελεί ένα πρότυπο διαγνωστικό και 
                        θεραπευτικό όμιλο όχι μόνο για τα ελληνικά αλλά και για τα 
                        παγκόσμια δεδομένα. Χρησιμοποιώντας την τελευταία λέξη της τεχνολογίας 
                        και ακολουθώντας τις επιστημονικές εξελίξεις, η ΔΙΑΓΝΩΣΗ Α.Ε εφαρμόζει
                        την τεχνολογία νέας γενιάς στον ιατρικό τομέα εγκαθιστώντας state-of-the art
                        απεικονιστικά μηχανήματα με εγγυημένη ποιότητα αποτελέσματος.
                    </p>  
                    <h4>Τρόπος επιλογής εξετάσεων</h4>
                    <p class="ml-3 mr-3">Για να κλείσετε διαγνωστικές εξετάσεις σε κάποιο κέντρο μας, πατήστε το κούμπι
                        επιλογή εξετάσεων που εμφανίζεται στην αρχή της σελίδας. Για να μπορείτε να κλείνετε 
                        εξετάσεις θα πρέπει να έχετε κάνει <a href="#">εγγραφή</a> στην σελίδα μας. 
                        Πατώντας το κουμπί εισέρχεστε σε μία σελίδα όπου θα πρέπει να συμπληρώσετε τα πεδία  
                        μίας φόρμας βήμα βήμα.<br>
                        <br>
                        Μπορείτε να επιλέξετε μία από τις παρακάτω κατηγορίες εξετάσεων:
                    </p>   
                </div>                  
            </div>
            <div class="col-xs-0 col-md-2"></div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="card-deck">
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/aimatologikes.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Αιματολογικές</h6>
                    </div>
                </div>
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/yperixosKardias.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Υπέρηχος Καρδιάς</h6>
                    </div>
                </div>
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/yperixosKoilias.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Υπέρηχος Κοιλίας</h6>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row d-flex justify-content-center">
            <div class="card-deck mt-3">
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/axoniki.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Αξονική Τομογραφία</h6>
                    </div>
                </div>
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/magnitiki-tomografia.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Μαγνητική Τομογραφία</h6>
                    </div>
                </div>
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/spintirografima.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Σπινθιρογράφημα</h6>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row d-flex justify-content-center">
            <div class="card-deck mt-3 mb-3">
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/egkefalografima.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Εγκεφαλογράφημα</h6>
                    </div>
                </div>
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/muografima.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Μυογράφημα</h6>
                    </div>
                </div>
                <div class="card col-xs-12 col-sm-6-col-md-4">
                    <img class="card-img-top" src="images/checkup.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">Check up</h6>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <footer class="page-footer bg-dark">
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