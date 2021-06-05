$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });


$(document).ready(function(){
  
  $(".Modern-Slider").slick({
    autoplay:false,
    autoplaySpeed:100000,
    speed:500,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:true,
    pauseOnDotsHover:true,
    lazyLoad: "progressive",
    cssEase:'linear',
   // fade:true,
    draggable:true,
    prevArrow:'<button class="PrevArrow"></button>',
    nextArrow:'<button class="NextArrow"></button>', 
  });
  
})



var prevButton = '<button type="button" data-role="none" class="slick-prev" aria-label="prev"><span class="pre-text">Previous</span><img src="wp-content/themes/venquis/assets/images/left-arrow.png"></button>',
    nextButton = '<button type="button" data-role="none" class="slick-next" aria-label="next"><span class="next-text">Next</span><img src="wp-content/themes/venquis/assets/images/right-arrow.png"></button>';

$('.single-item').slick({
  infinite: true,
  dots: true,
  autoplay: false,
  autoplaySpeed: 10000,
  speed: 700,
  cssEase: 'ease-in-out',
  prevArrow: prevButton,
  nextArrow: nextButton
});

$('.quote-container').mousedown(function(){
  $('.single-item').addClass('dragging');
});
$('.quote-container').mouseup(function(){
  $('.single-item').removeClass('dragging');
});

$('.menu-toggle').on('click', function() {
  $(this).toggleClass('is-active');
});

var swiper = new Swiper(".mySwiper", {
  speed: 600,
  parallax: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});