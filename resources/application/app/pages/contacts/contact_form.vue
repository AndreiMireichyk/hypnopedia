<template>
    <div class="contacts__form">
        <div class="form" v-if="!accept">
            <h1 class="form__title">Contact</h1>
            <div class="form__input" :class="{'has-error': error.name.length }">
                <input :placeholder="$lang.name" v-model="name">
                <small>{{ error.name }}</small>
            </div>
            <div class="form__input" :class="{'has-error': error.contact.length }">
                <input :placeholder="$lang.contact" v-model="contact">
                <small>{{ error.contact }}</small>
            </div>
            <div class="form__input" :class="{'has-error': error.message.length }">
                <textarea :placeholder="$lang.message" v-model="message"/>
                <small>{{ error.message }}</small>
            </div>
            <div class="form__checkbox">
                <input id="accept" type="checkbox" v-model="accept_policy">
                <label for="accept">{{$lang.terms}}</label>
            </div>
            <div class="form__action"><a class="form__btn" href="javascript:void(0)" :class="{'disabled': !accept_policy || loading }" @click.stop="send">{{$lang.submit}}</a></div>
        </div>
        <div class="accept" v-else><a class="accept__close" href="javascript:void(0)" @click.stop="accept=false"/><img class="accept__icon" src="./assets/accept.svg" alt="accept">
            <p class="accept__text">{{$lang.tnx}}</p>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "contact_form",
        data() {
            return {
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
        },
        mounted() {
            $(function () {
                $('textarea').each(function () {
                    this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
                }).on('input', function () {
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px';
                });
            });
        }
    }
</script>

<style scoped>

</style>
