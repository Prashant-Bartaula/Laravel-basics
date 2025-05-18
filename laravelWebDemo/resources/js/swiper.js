document.addEventListener('DOMContentLoaded', ()=>{
     let swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".custom-next-button",
        prevEl: ".custom-prev-button",
      },
    });
})