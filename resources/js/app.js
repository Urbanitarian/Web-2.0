import './bootstrap';
import Alpine from 'alpinejs'
import barba from '@barba/core';


 
window.Alpine = Alpine
 
Alpine.start()

barba.init(
    {
        prevent: ({ el }) => el.classList && el.classList.contains('prevent')
    }
);
        barba.hooks.afterEnter((data) => {
            $(window).scrollTop(0);

            const swiper = new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1.5,
                spaceBetween: 24,
                centeredSlides: true,
                autoplay: {
                    delay: 8000,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    800: {
                        slidesPerView: 3,
                    },
                    1100: {
                        slidesPerView: 4,
                    },
                },
            })
        });

        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1.5,
                spaceBetween: 24,
                centeredSlides: true,
                autoplay: {
                    delay: 8000,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    800: {
                        slidesPerView: 3,
                    },
                    1100: {
                        slidesPerView: 4,
                    },
                },
            })
        })