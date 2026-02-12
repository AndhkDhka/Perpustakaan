import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import Alpine from 'alpinejs';


document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('[data-animate]').forEach(el => {
        observer.observe(el);
    });
});

document.addEventListener("scroll", () => {
    document.querySelectorAll(".reveal").forEach(el => {
        const pos = el.getBoundingClientRect().top;
        if (pos < window.innerHeight - 100) {
            el.classList.add("active");
        }
    });
});


window.Alpine = Alpine;

Alpine.start();
