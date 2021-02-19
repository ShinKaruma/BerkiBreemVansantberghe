var slideIndex = 1;
var timer = null;
showSlides(slideIndex);

function plusSlides(n) {
    clearTimeout(timer);
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    clearTimeout(timer);
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n == undefined) { n = ++slideIndex; }
    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    timer = setTimeout(showSlides, 5000);
}


function clickHandler() {
    const doc = new jsPDF();
    var desc = window.document.getElementsByClassName("desc")[0];
    var nom = window.document.getElementsByClassName("nom")[0];

    doc.fromHTML(
        desc,
        10,
        10,
        {
        });
    doc.fromHTML(
        nom,
        10,
        20,
        {
       });
    doc.save("fiche_bien.pdf");
}

