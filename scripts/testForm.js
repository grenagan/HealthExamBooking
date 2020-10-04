
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  
  if (n == 1 && !validateForm()) return false;

  
  // Hide the current tab:
  x[currentTab].style.display = "none";

  if(x[currentTab].getAttribute("id") == "test_selection" && n == 1)
  {
      
    var y = x[currentTab].getElementsByTagName("input");
     for(i=0;i<y.length;i++)
     {
         var testCategory = y[i].getAttribute("id");
         setTestConfirmation(testCategory);
     }   
      
  } 

  if(x[currentTab].getAttribute("id") == "date" && n==1)
  { 
    var tests = [];
    var y= x[currentTab-1].getElementsByTagName("input");
    for(i=0;i<y.length;i++)
    {
      var id = y[i].getAttribute("id");
      if(document.getElementById(id).checked)
      {
        var test = y[i].getAttribute("value");
        tests.push(test);  
        
      }
    }



    $.ajax({
      type: "POST",                                            
      url: '../controllers/receiptController.php',                        
      data: { testsArray: tests } ,                                                                         
      success: function(data)          
      {   
         console.log(data);
         $("#receipt").html(data);
      }
   });

  }
  if(x[currentTab].getAttribute("id") == "receipt" && n==1)
  {
      console.log(document.getElementById('paymentmethod1').checked);
      if(document.getElementById('paymentmethod1').checked == true)
      {

        document.getElementById("insurance").style.display = "none";
        document.getElementById("cardPayment").style.display = "block";

      }
      else
      {
        document.getElementById("insurance").style.display = "block";
        document.getElementById("cardPayment").style.display = "none";

      }

  }
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    
    document.getElementById("form").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  z= x[currentTab].getElementsByTagName("select");
  console.log(z.length);
  if(x[currentTab].getAttribute("id") == "paymentMethod" || x[currentTab].getAttribute("id") == "test_selection" || x[currentTab].getAttribute("id") == "test_confirmation")
  {
      var oneChecked = false;
      // A loop that checks if at least one input field in the current tab is checked:
    for (i = 0; i < y.length; i++)
    {

        if (y[i].checked)
        {
            oneChecked = true;
        }
    }
    if(!oneChecked)
    {
      
      // and set the current valid status to false:
      valid = false;
    }
  }
  else
  {
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) 
    {
        
        // If a field is empty...
        if (y[i].value == "")
        {
            // add an "invalid" class to the field:
            y[i].className += " invalid";    
            // and set the current valid status to false:
            valid = false;
        }
    }

      for (j = 0; j < z.length; j++) 
      {
        console.log(z[j].value);
          // If a field is empty...
          if (z[j].value == "")
          {
              // add an "invalid" class to the field:
              z[j].className += " invalid";    
              // and set the current valid status to false:
              valid = false;
          }
      }
 }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function setTestConfirmation(testCategory)
{
    var confirmation = testCategory + "_confirmation";
    var confirmationParent = "p_" + testCategory + "_confirmation";

    if(document.getElementById(testCategory).checked == false)
    {
      document.getElementById(confirmationParent).style.display = "none";
    }
    else
    {
      document.getElementById(confirmationParent).style.display = "block"; 
    }
}