var swiper = new Swiper(".home-slider", {
    loop:true,
    grabCurso:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
      
    },
  });
  const images = document.querySelectorAll('.article img');

images.forEach((image) => {
  image.addEventListener('click', () => {
    // Code pour afficher l'image en grand
  });
});
let testimonialIndex = 0;
const testimonials = document.querySelectorAll('.testimonial');
const totalTestimonials = testimonials.length;

function showNextTestimonial() {
  testimonials[testimonialIndex].classList.remove('active');
  testimonialIndex = (testimonialIndex + 1) % totalTestimonials;
  testimonials[testimonialIndex].classList.add('active');
}

setInterval(showNextTestimonial, 5000);
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
$(document).ready(function(){
  $('.carousel').carousel({
      padding: 200

  });
  autoplay();
  function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 4500);
  }
  });  