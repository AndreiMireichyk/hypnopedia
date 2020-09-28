import '../scroll_top/scroll_top.scss'

(function () {

    let btn = document.querySelector('.scroll_top');

    let scrollHandler = function () {
        document.body.scrollIntoView({block: "start", behavior: "smooth"});
    };

    let positionHandler = function () {
        let top = window.pageYOffset;

        if (top >= 50) {
            btn.classList.add('show')
        } else {
            btn.classList.remove('show')
        }
    };

    document.addEventListener('scroll', positionHandler);

    btn.addEventListener('click', scrollHandler);
})();
