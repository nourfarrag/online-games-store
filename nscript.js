var slideindex = 0;
window.onload = function ()
{
    showslides(slideindex);
};

function plusslides(n) {
    showslides(slideindex += n);
}
function showslides(n) {
    var i;
    slideindex=n;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");
//for the arrow in case its the last slide it goes back to the first and vice versa
    if (n > slides.length-1)
     {
        slideindex = 0;
    }

    if (n < 0) 
    {
        slideindex = slides.length-1;
    }
    //
///////// So it doesnt display the rest
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
////
/////so it only displays the current slide 
    slides[slideindex ].style.display = "block";
    ///
}
