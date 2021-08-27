console.log("coucou toi");

function myFunction() {
  var x = document.getElementById("myForm");
  var formButton = document.getElementById("formButton"); 
  if (x.style.display === "none") {
    x.style.display = "flex";
    formButton.innerHTML="Fermer cette fenêtre"; 
  } else {
    x.style.display = "none";
    formButton.innerHTML="Laisser un message"; 
  }
} 
