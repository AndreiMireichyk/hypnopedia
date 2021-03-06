import './header.scss';
import MenuSpy from 'menuspy';
document.addEventListener('DOMContentLoaded', function () {

    let toggler = document.querySelector('.header__toggle');

    let body = document.querySelector('body');

    toggler.addEventListener('click', function () {
        toggler.classList.toggle('open');
        if (toggler.classList.contains('open')) {

            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = 'auto';
        }

    });

    function closeMenu() {
        toggler.classList.remove('open');
        body.style.overflow = 'auto';
    }

    let links = document.querySelectorAll('.header__menu a, .header__logo a');

    links.forEach(item=> {
        item.addEventListener('click', closeMenu);
    });


    let elm = document.querySelector('.header__menu');
    let ms = new MenuSpy(elm);



});

