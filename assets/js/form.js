var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("back-home").style.display = "flex";
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("member").style.display = "block";

    document.getElementById("t1").style.display = "block";
    document.getElementById("t2").style.display = "none";
    document.getElementById("t3").style.display = "none";
    document.getElementById("t4").style.display = "none";

    document.getElementById("n1").style.display = "block";
    document.getElementById("n2").style.display = "none";
    document.getElementById("n3").style.display = "none";
    document.getElementById("n4").style.display = "none";

  } else if (n == 1) {
    document.getElementById("back-home").style.display = "none";
    document.getElementById("prevBtn").style.display = "flex";
    document.getElementById("member").style.display = "none";

    document.getElementById("t1").style.display = "none";
    document.getElementById("t2").style.display = "block";
    document.getElementById("t3").style.display = "none";
    document.getElementById("t4").style.display = "none";

    document.getElementById("n1").style.display = "none";
    document.getElementById("n2").style.display = "block";
    document.getElementById("n3").style.display = "none";
    document.getElementById("n4").style.display = "none";
  } 
  else if (n == 2){
    document.getElementById("back-home").style.display = "none";
    document.getElementById("prevBtn").style.display = "flex";
    document.getElementById("member").style.display = "none";
    // document.getElementById("member").style.display = "block";
    
    document.getElementById("t1").style.display = "none";
    document.getElementById("t2").style.display = "none";
    document.getElementById("t3").style.display = "block";
    document.getElementById("t4").style.display = "none";

    document.getElementById("n1").style.display = "none";
    document.getElementById("n2").style.display = "none";
    document.getElementById("n3").style.display = "block";
    document.getElementById("n4").style.display = "none";
  } else if (n == 3) {
    document.getElementById("back-home").style.display = "none";
    document.getElementById("prevBtn").style.display = "flex";
    document.getElementById("member").style.display = "none";
    // document.getElementById("member").style.display = "block";

    document.getElementById("t1").style.display = "none";
    document.getElementById("t2").style.display = "none";
    document.getElementById("t3").style.display = "none";
    document.getElementById("t4").style.display = "block";

    document.getElementById("n1").style.display = "none";
    document.getElementById("n2").style.display = "none";
    document.getElementById("n3").style.display = "none";
    document.getElementById("n4").style.display = "block";
  }
  
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Terminer";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
}



function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
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
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }

  return valid; // return the valid status
}

// Barre déroulante
const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");
const optionList = document.querySelector(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});


// CODE POUR METTRE LES TAGS SUR LA BARRE DÉROULANTE MAIS ÇA MARQUE QU'AVEC DES BALISES RADIO MAIS NOUS ON DOIT LAISSER PLUSIEURS CHOIX DONC C'EST PLUS GALÈRE

// optionsList.array.forEach(o => {
//   o.addEventListener("click", () => {
//     selected.innerHTML = o.querySelector("label").innerHTML;
//     optionsContainer.classList.remove("active");
//   });
// });