
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 10,
    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
    breakpoints: {
        1322: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1170: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});
