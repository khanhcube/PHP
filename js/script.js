let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

window.onscroll = () => {
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');

};

menu.onclick = () => {
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

var swiper = new Swiper(".home-slider", {

   loop: true,
   autoplay: {
      delay: 4000,
   },
   disableOnInteraction: false,
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor: true,
   loop: true,
   autoHeight: true,
   spaceBetween: 20,
   autoplay: {
      delay: 4000,
   },
   disableOnInteraction: false,
   breakpoints: {
      640: {
         slidesPerView: 1,
      },
      768: {
         slidesPerView: 3,
      },
      1024: {
         slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".brand-slider", {
   spaceBetween: 20,
   loop:true,
   autoplay: {
       delay: 2500,
       disableOnInteraction: false,
   },
   breakpoints: {
       450: {
         slidesPerView: 2,
       },
       768: {
         slidesPerView: 3,
       },
       991: {
         slidesPerView: 4,
       },
       1200: {
         slidesPerView: 5,
       },
     },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 6;

loadMoreBtn.onclick = () => {
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++) {
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = 'none';
   };
};