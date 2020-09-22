import '../../components/base/base'
import './contacts.scss'
import Vue from 'vue';
import contact_form from "./contact_form.vue";

const form = new Vue({
    render: h => h(contact_form)
}).$mount('#contacts_form');
