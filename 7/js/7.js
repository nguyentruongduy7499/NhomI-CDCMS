$(document).ready(function(){
var menu = ['Drink', 'Dessert', 'Food', 'Vegetarian']
var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 30,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
      renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menu[index]) + '</span>';
        },
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },  
  });
});