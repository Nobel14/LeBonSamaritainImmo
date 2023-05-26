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
 
    // Voici le script du range slider qui va jouer le role de filtre pour la superficie
				var rangeOne = document.querySelector('input[name="rangeOne"]'),
						rangeTwo = document.querySelector('input[name="rangeTwo"]'),
						outputOne = document.querySelector('.outputOne'),
						outputTwo = document.querySelector('.outputTwo'),
						inclRange = document.querySelector('.incl-range'),
						updateView = function () {
							if (this.getAttribute('name') === 'rangeOne') {
								outputOne.innerHTML = this.value;
								outputOne.style.left = this.value / this.getAttribute('max') * 100 + '%';
							} if (this.getAttribute('name') === 'rangeTwo') {
								outputTwo.style.left = this.value / this.getAttribute('max') * 100 + '%';
								outputTwo.innerHTML = this.value
							}
							if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
								inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
								inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
							} else {
								inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
								inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
							}
						};
				var rangeOne_accordion = document.querySelector('input[name="rangeOne-accordion"]'),
						rangeTwo_accordion = document.querySelector('input[name="rangeTwo-accordion"]'),
						outputOne_accordion = document.querySelector('.outputOne-accordion'),
						outputTwo_accordion = document.querySelector('.outputTwo-accordion'),
						inclRange_accordion = document.querySelector('.incl-range-accordion'),
						updateView_accordion = function () {
							if (this.getAttribute('name') === 'rangeOne-accordion') {
								outputOne_accordion.innerHTML = this.value;
								outputOne_accordion.style.left = this.value / this.getAttribute('max') * 100 + '%';
							} if (this.getAttribute('name') === 'rangeTwo-accordion') {
								outputTwo_accordion.style.left = this.value / this.getAttribute('max') * 100 + '%';
								outputTwo_accordion.innerHTML = this.value
							}
							if (parseInt(rangeOne_accordion.value) > parseInt(rangeTwo_accordion.value)) {
								inclRange_accordion.style.width = (rangeOne_accordion.value - rangeTwo_accordion.value) / this.getAttribute('max') * 100 + '%';
								inclRange_accordion.style.left = rangeTwo_accordion.value / this.getAttribute('max') * 100 + '%';
							} else {
								inclRange_accordion.style.width = (rangeTwo_accordion.value - rangeOne_accordion.value) / this.getAttribute('max') * 100 + '%';
								inclRange_accordion.style.left = rangeOne_accordion.value / this.getAttribute('max') * 100 + '%';
							}
						};

					document.addEventListener('DOMContentLoaded', function () {
						updateView.call(rangeOne);
						updateView.call(rangeTwo);
						updateView_accordion.call(rangeOne_accordion);
						updateView_accordion.call(rangeTwo_accordion);
						$('input[type="range"]').on('mouseup', function() {
							this.blur();
						}).on('mousedown input', function () {
							updateView.call(this);
						});
					});