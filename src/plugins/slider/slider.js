
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
        1024: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        880: {
            slidesPerView: 3,
            spaceBetween: 90,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        480: {
            slidesPerView: 2,
            spaceBetween: -40,
        },

        440: {
            slidesPerView: 2,
            spaceBetween: 10,
        },

        320: {
            spaceBetween: 10,
        }
    }
});
