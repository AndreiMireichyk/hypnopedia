import '../../components/base/base'
import './index.scss'
import Accordion from "accordion/src/accordion";
import "bootstrap/js/dist/modal.js"


(new Accordion(document.querySelector('.sc-5__accordion')));

$(function () {

    (function () {
        $("[data-menu-spy]").on("click", function (event) {

            event.preventDefault();
            let id = $(this).attr('href').replace('/', '').replace('ru', '').replace('en', '')

            let element = $(id)[0];

            element.scrollIntoView({block: "start", behavior: "smooth"})
        });
    })();


    $(window).resize(function () {
        $('.device__animation').height($('.device__phone img').width())
        $('.device__animation').width($('.device__phone img').width())
    });

    $('.device__phone img').on('load', function () {
        $('.device__animation').height($('.device__phone img').width())
        $('.device__animation').width($('.device__phone img').width())
    })



    $('#video').on('hidden.bs.modal', function (e) {
        $("#video iframe")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    })
});
