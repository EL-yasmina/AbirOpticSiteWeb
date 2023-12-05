let searchForm = document.querySelector('.header .search-form');

let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
}

let slides = document.querySelectorAll('.accueil .slide');
let index = 0;

function next() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

function validerMotDePasse() {

    var inputMotDePasse = document.getElementById('mot_de_passe');
    var inputConfirmerMotDePasse = document.getElementById('confirmer_mot_de_passe');
    var motDePasse = inputMotDePasse.value;
    var confirmerMotDePasse = inputConfirmerMotDePasse.value;

    if (motDePasse !== confirmerMotDePasse) {
        inputConfirmerMotDePasse.setCustomValidity("Les mots de passe ne correspondent pas.");
        inputConfirmerMotDePasse.reportValidity();
        return false;
    }
    return true;
}

function cleanValidatorMotDePasse() {
    var inputConfirmerMotDePasse = document.getElementById('confirmer_mot_de_passe');
    inputConfirmerMotDePasse.setCustomValidity("");

}



function erreurMotDePasse() {

    var inputMotDePasse = document.getElementById('mot_de_passe');
    var url = window.location.href;
    if (!url.includes("login.php?erreur"))
        return;

    inputMotDePasse.setCustomValidity("Les mots de passe ou l'email ne correspondent pas.");
    inputMotDePasse.reportValidity();

}
function cleanValidatorMotDePasseLogin() {
    var inputMotDePasse = document.getElementById('mot_de_passe');
    inputMotDePasse.setCustomValidity("");
}


function validerMotDePasseMonCompte() {

    var inputMotDePasse = document.getElementById('new_mot_de_passe');
    var inputConfirmerMotDePasse = document.getElementById('confirmer_new_mot_de_passe');
    var motDePasse = inputMotDePasse.value;
    var confirmerMotDePasse = inputConfirmerMotDePasse.value;

    if (motDePasse.trim() === "" || confirmerMotDePasse.trim() === "") {
        return true;
    }
    if (motDePasse !== confirmerMotDePasse) {
        inputConfirmerMotDePasse.setCustomValidity("Les mots de passe ne correspondent pas.");
        inputConfirmerMotDePasse.reportValidity();
        return false;
    }

    return true;
}
function cleanValidatorMotDePasseMonCompte() {
    var inputMotDePasse = document.getElementById('confirmer_new_mot_de_passe');
    inputMotDePasse.setCustomValidity("");
}




function voirProduit(titre, description) {
    let titreHtml = "<p style='text-align: center;'><mark>" + titre + "</mark></p";
    let descriptionHtml = "<p>" + description + "</p>";

    alertify.alert(titreHtml, descriptionHtml)
        .setting({
            'label': 'Ok',
            'closable': false
        });
}

erreurMotDePasse();











var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
};





document.addEventListener("DOMContentLoaded", function() {
    const icons = document.querySelectorAll('.icons');

    icons.forEach(icon => {
        const description = icon.querySelector('.description');

        icon.addEventListener('click', () => {
            // Toggle de la classe 'show' pour afficher ou masquer la description
            description.classList.toggle('show');
        });
    });
});




