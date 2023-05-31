var swiper = new Swiper(".home-slider", {
    loop:true,
    grabCurso:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
      
    },
  });
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

    /* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

   