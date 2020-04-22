import '../../components/base/base'
import './index.scss'
import Accordion from "accordion/src/accordion";
import "bootstrap/js/dist/modal.js"

(new Accordion(document.querySelector('.sc-5__accordion')));

$(function () {
    $( window ).resize(function() {
        $('.device__animation').height($('.device__phone img').width())
        $('.device__animation').width($('.device__phone img').width())
    });
    $('.device__animation').height($('.device__phone img').width())
    $('.device__animation').width($('.device__phone img').width())


    $('#video').on('hidden.bs.modal', function (e) {
        $("#video iframe")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    })
});
