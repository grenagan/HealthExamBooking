<!DOCTYPE html>
<html>
    <head>
        <title>Διάγνωση</title>
        <link rel="shortcut icon" href="/Diagnosi/microscope-solid.ico" type="image/x-icon"> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="../styles/testArrange.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="../styles/datepicker.css">
    </head>
    <body class="mt-5 pt-5 mb-5 pb-5" style="overflow-x: hidden;">
        <nav class="navbar bg-dark navbar-dark fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="../index.php"><i class="fas fa-microscope mr-2"></i>Διάγνωση</a>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <form class="col-xs-12 col-sm-8 col-md-6 border bg-light" action="../controllers/submitController.php" method="POST" id="form" >
                    <div class="tab" id="paymentMethod">Επιλέξτε τρόπο πληρωμής:
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentmethod" id="paymentmethod1" value="Credit Card">
                    <label class="form-check-label" for="paymentmethod1">
                        Ιδιώτης
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentmethod" id="paymentmethod2" value="insurance">
                    <label class="form-check-label" for="paymentmethod2">
                        Ασφαλιστική
                    </label>
                    </div>
                    </div>
                    <div class="tab" id="test_selection">Επιλέξτε εξετάσεις:
                        <div class="form-check" id="p_aima">
                            <input class="form-check-input" type="checkbox" value="" id="aima">
                            <label class="form-check-label" for="aima">
                                Αιματολογικές
                            </label>
                        </div>
                        <div class="form-check" id="p_kardia">
                            <input class="form-check-input" type="checkbox" value="" id="kardia">
                            <label class="form-check-label" for="kardia">
                            Υπέρηχος καρδιάς 
                            </label>
                        </div>
                        <div class="form-check" id="p_koilia">
                            <input class="form-check-input" type="checkbox" value="" id="koilia">
                            <label class="form-check-label" for="koilia">
                                Υπέρηχος κοιλίας
                            </label>
                        </div>
                        <div class="form-check" id="p_axon">
                            <input class="form-check-input" type="checkbox" value="" id="axon">
                            <label class="form-check-label" for="axon">
                                Αξονική Τομογραφία
                            </label>
                        </div>
                        <div class="form-check" id="p_magnet">
                            <input class="form-check-input" type="checkbox" value="" id="magnet">
                            <label class="form-check-label" for="magnet">
                                Μαγνητική Τομογραφία
                            </label>
                        </div>
                        <div class="form-check" id="p_bouzi">
                            <input class="form-check-input" type="checkbox" value="" id="bouzi">
                            <label class="form-check-label" for="bouzi">
                                Σπινθιρογράφημα
                            </label>
                        </div>
                        <div class="form-check" id="p_brains">
                            <input class="form-check-input" type="checkbox" value="" id="brains">
                            <label class="form-check-label" for="brains">
                                Εγκεφαλογράφημα
                            </label>
                        </div>
                        <div class="form-check" id="p_fitness">
                            <input class="form-check-input" type="checkbox" value="" id="fitness">
                            <label class="form-check-label" for="fitness">
                                Μυογράφημα
                            </label>
                        </div>
                        <div class="form-check" id="p_checkup">
                            <input class="form-check-input" type="checkbox" value="" id="checkup">
                            <label class="form-check-label" for="checkup">
                                Check up
                            </label>
                        </div>
                    </div>

                    <div class="tab" id="test_confirmation">Επιβεβαιώστε τις εξετάσεις:
                    <div class="form-check" id="p_aima_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="aima" id="aima_confirmation">
                            <label class="form-check-label" for="aima_confirmation">
                                Αιματολογικές
                            </label>
                        </div>
                        <div class="form-check" id="p_kardia_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="kardia" id="kardia_confirmation">
                            <label class="form-check-label" for="kardia_confirmation">
                            Υπέρηχος καρδιάς 
                            </label>
                        </div>
                        <div class="form-check" id="p_koilia_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="koilia" id="koilia_confirmation">
                            <label class="form-check-label" for="koilia_confirmation">
                                Υπέρηχος κοιλίας
                            </label>
                        </div>
                        <div class="form-check" id="p_axon_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="axon" id="axon_confirmation">
                            <label class="form-check-label" for="axon_confirmation">
                                Αξονική Τομογραφία
                            </label>
                        </div>
                        <div class="form-check" id="p_magnet_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="magnet" id="magnet_confirmation">
                            <label class="form-check-label" for="magnet_confirmation">
                                Μαγνητική Τομογραφία
                            </label>
                        </div>
                        <div class="form-check" id="p_bouzi_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="bouzi" id="bouzi_confirmation">
                            <label class="form-check-label" for="bouzi_confirmation">
                                Σπινθιρογράφημα
                            </label>
                        </div>
                        <div class="form-check" id="p_brains_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="brains" id="brains_confirmation">
                            <label class="form-check-label" for="brains_confirmation">
                                Εγκεφαλογράφημα
                            </label>
                        </div>
                        <div class="form-check" id="p_fitness_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="fitness" id="fitness_confirmation">
                            <label class="form-check-label" for="fitness_confirmation">
                                Μυογράφημα
                            </label>
                        </div>
                        <div class="form-check" id="p_checkup_confirmation">
                            <input class="form-check-input" name ="tests[]" type="checkbox" value="checkup" id="checkup_confirmation">
                            <label class="form-check-label" for="checkup_confirmation">
                                Check up
                            </label>
                        </div>
                    
                    </div>


                    <div class="tab" id="date">Επιλέξτε ημερομηνία εξέτασης:
                        <div class="form-group mb-4" >
                            <div class="datepicker date input-group p-0 shadow-sm" id="pickerContainer">
                                <input type="text" name="date" placeholder="Επιλέξτε ημερομηνία εξέτασης:" class="form-control mt-2 py-2 px-2" id="testDate" name="testDate" onselect="this.className = ''">
                                <div class="input-group-append" ><span class="input-group-text mt-2 px-2"><i class="fa fa-clock-o"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="receipt">
                        Απόδειξη
                    </div>     

                    <div class = "tab" id="payment">
                        <div id="cardPayment">
                        <div class="container d-flex justify-content-center mt-5">
                            Πληρωμή / Συμπληρώστε 
                            τα στοιχεία της καρτας σας
                        </div>
                            <div class="bg-light">
                                <div class="p-5 mt-5 mb-5">
                                    <div class="form-group">
                                        <label for="username">Full name (on the card)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="username" placeholder="" required="">
                                    </div>
                                    <div class="form-group">
                                            <label for="cardNumber">Card number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cardNumber" placeholder="">
                                            </div> <!-- input-group.// -->
                                    </div> <!-- form-group.// -->
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label><span class="hidden-xs">Expiration</span> </label>
                                                <div class="form-inline">
                                                    <select class="form-control" style="width:45%;">
                                                    <option  value="" disabled selected></option>
                                                    <option>01 - January</option>
                                                    <option>02 - February</option>
                                                    <option>03 - March</option>
                                                    <option>04 - April</option>
                                                    <option>05 - May</option>
                                                    <option>06 - June</option>
                                                    <option>07 - July</option>
                                                    <option>08 - August</option>
                                                    <option>09 - September</option>
                                                    <option>10 - October</option>
                                                    <option>11 - November</option>
                                                    <option>12 - December</option>
                                                    </select>
                                                    <span style="width:10%; text-align: center"> / </span>
                                                    <select class="form-control" style="width:45%;">
                                                    <option  value="" disabled selected></option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                                <input class="form-control" required="" type="text">
                                            </div> <!-- form-group.// -->
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        </div>
                        <div id="insurance">
                        <div class="mt-5 mb-3" >
                            <div class="form-group">
                                <label for="insurance_num">Αριθμός Ασφαλιστηρίου</label>
                                        <div class="form-control">
                                            <input type="text" class="form-control" name="insurance_num" placeholder="" required="">
                                        </div>
                                    </div>
                            <div class="form-group">
                                  <label for="insuranceComp">Ασφαλιστική Εταιρεία</label>
                                    <div>
                                        <select class="form-control">
                                        <option  value="" disabled selected></option>
                                        <option>ΑΤΕ ασφαλιστική</option>
                                        <option>ΑΧΑ</option>
                                        <option>ΑΧΑ</option>
                                        <option>Εθνική</option>
                                        <option>Groupama</option>
                                        <option>Metlife</option>
                                        <option>NN</option>
                                        </select>
                                        </div>
                                    </div>       
                        </div>  
                        </div>                          

                    </div>         
                    <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" name="testSubmit" id="prevBtn" class="btn btn-primary mb-5" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" name="submit" class="btn btn-primary mb-5" onclick="nextPrev(1)">Next</button>
                    </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    </div>
                    
        
                </form>
            </div>
        </div>
        <footer class="page-footer bg-dark fixed-bottom">
            <div class="footer-copyright text-center text-white py-3">
                © 2020 Copyright: Διάγνωση ΑΕ
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/df97cf18c6.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="../scripts/testForm.js"></script>
        <script>$(function () {

        // INITIALIZE DATEPICKER PLUGIN
        $('.datepicker').datepicker({
            clearBtn: true,
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true,
            orientation: 'bottom',
            container: "#pickerContainer"
        });
        });</script>
    </body>
</html>
