//slider de l'accueil
document.addEventListener("DOMContentLoaded", function() {
    
    const carouselItems = document.querySelectorAll(".carouselItem");
    const boutonGauche = document.getElementById("bouton-gauche");
    const boutonDroit = document.getElementById("bouton-droit");
  
    let currentIndex = 0;
  
    // Fonction pour afficher la carte actuelle
    function showCard(index) {
      // Masquez toutes les cartes
      carouselItems.forEach(item => {
        item.style.display = "none";
      });
  
      // Affichez la carte actuelle
      carouselItems[index].style.display = "block";
    }
  
    // bouton suivant
    boutonDroit.addEventListener("click", function() {
      currentIndex++;
      if (currentIndex >= carouselItems.length) {
        currentIndex = 0;
      }
      showCard(currentIndex);
    });
  
    // bouton précédent
    boutonGauche.addEventListener("click", function() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = carouselItems.length - 1;
      }
      showCard(currentIndex);
    });
  
    // Affichez la première carte au chargement de la page
    showCard(currentIndex);
  });

//animation de la présentation dans l'accueil
window.addEventListener("scroll", function(){

  var scrollPosition = this.window.scrollY;

  if (scrollPosition > 300) {
    document.getElementById("bio").classList.toggle("gauche");
  }
})
  