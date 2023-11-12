let searchForm = document.querySelector('.header .search-form');

let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
}

let slides = document.querySelectorAll('.accueil .slide');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
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

function cleanValidatorMotDePasse(){
    var inputConfirmerMotDePasse = document.getElementById('confirmer_mot_de_passe');
    inputConfirmerMotDePasse.setCustomValidity("");

}




