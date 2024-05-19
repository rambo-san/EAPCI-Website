import './bootstrap';
import 'flowbite';
                
                 window.onscroll = function() {scrollFunction()}; // call scrollFunction when user scrolls

                function scrollFunction() {
                    var button = document.getElementById('moveToTopButton');
                    var nav = document.getElementById('navbar');
                    if (window.scrollY > 20) {
                        button.classList.remove('hidden');
                        nav.classList.add('drop-shadow-xl');
                    } else {
                        button.classList.add('hidden');
                        nav.classList.remove('drop-shadow-xl');
                    }
                }

                function scrollToTop() {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
                //preloader
                
                setInterval(() => {
                    document.querySelector('[data-carousel-next]').click();
                }, 4000);