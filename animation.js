function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);

// Cette fonction attribut la valeur de la hauteur de l'image à la div de classe "offer", "front-card" et "back-card" 
// cette fonction ne marche pas pour le moment
function resizeOfferDiv(){
  var cardHeight = document.querySelector("div.offer img").height;
  console.log('cardHeight='+cardHeight);
  document.querySelector("div.offer").setAttribute("height", cardHeight);
  document.querySelector("div.front-card").setAttribute("height", cardHeight);
  document.querySelector("div.back-card").setAttribute("height", cardHeight);
  console.log('div.offer_Height='+document.querySelector("div.offer").getAttribute("height"));

}
window.addEventListener("load", resizeOfferDiv, false);
window.addEventListener("resize", resizeOfferDiv, false);

const humberger_menu_wrapper = document.querySelector(".humberger-menu-wrapper");
const div_window = document.querySelector(".window");
const overlay = document.querySelector(".overlay");

humberger_menu_wrapper.onclick = function()     
{
  document.querySelector(".window").classList.add("left-shift");
  document.querySelector(".humberger-menu").classList.add("active");
  document.querySelector(".overlay").classList.add("active");
}
overlay.onclick = function() {
  document.querySelector(".window").classList.remove("left-shift");
  document.querySelector(".overlay").classList.remove("active");
  document.querySelector(".humberger-menu").classList.remove("active");
}

    // document.querySelector(".humberger__menu__overlay").classList.add("active");
    // document.querySelector("body").classList.add("over_hid");
  
