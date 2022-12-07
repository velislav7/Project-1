
// Dropdown Navigation

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
 }

 // Close the dropdown menu if the user clicks outside of it
 window.onclick = function(event) {
 if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
       var openDropdown = dropdowns[i];
       if (openDropdown.classList.contains('show')) {
       openDropdown.classList.remove('show');
       }
    }
 }
 } 


//  Slideshow

 let slideIndex = 0;
 showSlides();

 function showSlides() {
 let i;
 let slides = document.getElementsByClassName("mySlides");
 for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
 }
 slideIndex++;
 if (slideIndex > slides.length) {slideIndex = 1}    
 slides[slideIndex-1].style.display = "block";  
 setTimeout(showSlides, 10000); // Change image every 10 seconds
 }


//  Dropdown Reveal

function Reveal1() {
   document.getElementById("dropdown-text-1").classList.toggle("dropdown-text");
   const icon = document.getElementById("dr-i-1")
   if (icon.innerHTML == "-"){
      icon.innerHTML ="+"
   }
   else{
      icon.innerHTML ="-"
   }
}
function Reveal2() {
   document.getElementById("dropdown-text-2").classList.toggle("dropdown-text");
   const icon = document.getElementById("dr-i-2")
   if (icon.innerHTML == "-"){
      icon.innerHTML ="+"
   }
   else{
      icon.innerHTML ="-"
   }

}
function Reveal3() {
   document.getElementById("dropdown-text-3").classList.toggle("dropdown-text");
   const icon = document.getElementById("dr-i-3")
   if (icon.innerHTML == "-"){
      icon.innerHTML ="+"
   }
   else{
      icon.innerHTML ="-"
   }


}
