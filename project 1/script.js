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