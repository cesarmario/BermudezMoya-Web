const carouselSlide = document.querySelector(".carousel-slide");
const carouselImages = document.querySelectorAll(".carousel-slide img");

// Botones
const prevBtn = document.querySelector(".carousel-prev");
const nextBtn = document.querySelector(".carousel-next");

// Contador
let counter = 0;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = `translateX(${-size * counter}px)`;

// Botones Event listeners
nextBtn.addEventListener("click", () => {
  changeSlide(1);
});
prevBtn.addEventListener("click", () => {
  changeSlide(-1);
});

// Cambio de imagen
function changeSlide(num) {
  if (num == 1) {
    if (counter >= carouselImages.length - 1) counter = 0;
    else counter++;
  } else {
    if (counter <= 0) counter = carouselImages.length - 1;
    else counter--;
  }
  carouselSlide.style.transition = "transform 0.4s ease-in-out";
  carouselSlide.style.transform = `translateX(${-size * counter}px)`;
}

// Autoplay
// setInterval(function() {
//   changeSlide(1);
// }, 5000);
