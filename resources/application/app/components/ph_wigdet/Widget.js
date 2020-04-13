import Vue from 'vue';
import Widget from './Widget.vue';

window.ph_widget = new Vue({
    render: h => h(Widget)
}).$mount('#widget');
