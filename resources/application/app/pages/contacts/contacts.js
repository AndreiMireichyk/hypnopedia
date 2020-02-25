import '../../components/base/base'
import './contacts.scss'
import Vue from 'vue';
import axios from 'axios';

const form = new Vue({
    el: "#js-form",
    data: {
        accept: false,
        accept_policy: false,
        loading: false,
        name: "",
        contact: "",
        message: "",
        error: {
            name: "",
            contact: "",
            message: ""
        }
    },
    methods: {
        send() {

            if (!this.accept_policy || this.loading) {
                return false;
            }

            this.loading = true;

            axios.post('/api/contacts', {
                name: this.name,
                contact: this.contact,
                message: this.message
            }).then(res => {
                this.loading = false;
                this.accept = true;
                this.clear();
            }).catch(error => {
                let data = error.response.data;

                for (let key in data.errors) {
                    this.error[key] = '';
                    setTimeout(e => {
                        this.error[key] = data.errors[key][0];
                    }, 100);
                }

                this.accept = false;
                this.loading = false;
            });


        },
        clear() {
            this.name = null;
            this.contact = null;
            this.message = null;
        }
    },
    watch: {
        name: function () {
            this.error.name = "";
        },
        contact: function () {
            this.error.contact = "";
        },
        message: function () {
            this.error.message = "";
        }
    }
});

