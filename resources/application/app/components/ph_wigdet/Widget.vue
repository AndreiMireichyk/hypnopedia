<template>
    <div class="widget" v-if="showWidget">
        <a href="javascript:void(0)" @click="setState">
            <img src="./assets/author.svg" alt="" class="widget__author">
        </a>


        <a href="javascript:void(0)" class="widget__start-message" v-if="startMessage" @click="showOfferMessage">
            <p v-if="typing" class="widget__typing">Typing <span class="widget__dots">...</span></p>
            <p v-else>Psst! Want early access to something cool?</p>
        </a>

        <a href="javascript:void(0)" class="widget__offer-message" v-if="tnxMessage" @click="setState">
            <a href="javascript:void(0)" class="widget__btn-close" @click="setState()">&times;</a>
            <p>You are incredibly awesome 😎</p>
        </a>

        <a href="javascript:void(0)" class="widget__offer-message" v-if="offerMessage">
            <a href="javascript:void(0)" class="widget__btn-close" @click="close()">&times;</a>
            <p class="widget__offer-text">
                👋 Hi, I'm Dr. Andrew Sokol, MD, PhD Belarusian State Medical University, Brain geek and CEO of
                Hypnopedia, which is based on the scientific somnology research.
                Hypnopedia uses Apple Watch sensors to identify the specific phase of sleep for playing affirmations
                without waking you up to improve mental health and stimulate positive life changes.
            </p>
            <p class="widget__offer-text"> Subscribe to become a part of Hypnopedia community and access limited
                offers.</p>
            <form class="widget__subscribe" @submit.prevent="onSubmit">
                <input type="email" placeholder="Enter your email" v-model="email">
                <a class="widget__btn" v-if="loading">Loading ...</a>
                <button class="widget__btn" v-else>Subscribe</button>
            </form>
        </a>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "widget",
        data() {
            return {
                loading: false,
                typing: true,
                startMessage: true,
                offerMessage: false,
                tnxMessage: false,
                showWidget: false,
                email: null
            }
        },

        methods: {

            onSubmit() {
                this.loading =true;
                axios.post('/ph_subscribe', {
                    email: this.email
                }).then(() => {
                    localStorage.setItem('ph_widget', '0');
                    this.offerMessage = false;
                    this.startMessage = false;
                    this.loading = false;
                    this.tnxMessage = true;
                }).catch((error) => {
                    this.loading = false;
                    alert('Error:( Please try again later.')
                })
            },

            setState() {

                if(this.tnxMessage){
                    return  this.showWidget = false;
                }

                if (!this.startMessage && !this.offerMessage) {
                    return this.offerMessage = true;
                }

                if (this.startMessage) {
                    return this.offerMessage = true;
                }

                if (this.offerMessage) {
                    return this.offerMessage = false;
                }
            },

            showOfferMessage() {
                this.startMessage = false;
                this.offerMessage = true;
            },

            close() {
                this.startMessage = false;
                this.offerMessage = false;
            }
        },

        mounted() {

            this.showWidget = localStorage.getItem('ph_widget') !== '0';

            setTimeout(() => {
                this.typing = false
            }, 2000)
        }
    }
</script>

<style scoped lang="scss">
    @import '../base/smartgrid';

    .widget {
        position: fixed;
        left: 20px;
        bottom: 20px;
        z-index: 150;

        &__author {
            width: 120px;
            height: 120px;
        }

        &__start-message {
            position: absolute;
            left: 120px;
            bottom: 50px;
            padding: 15px;
            border-radius: 16px;
            display: block;
            min-width: 200px;
            overflow: hidden;
            background: #fff;
            box-shadow: rgba(0, 0, 0, 0.25) 2px 2px 10px 0;


            p {
                display: flex;
                align-items: flex-end;
            }

        }

        &__offer-message {
            position: absolute;
            left: 120px;
            bottom: 50px;
            padding: 16px 28px 16px 16px;
            border-radius: 16px;
            display: block;
            min-width: 250px;
            overflow: hidden;
            background: #fff;
            box-shadow: rgba(0, 0, 0, 0.25) 2px 2px 10px 0;


        }

        &__offer-text {
            margin-bottom: 16px;
        }

        &__typing {
            opacity: .5;
        }

        &__dots {
            margin: 0 5px;
            overflow: hidden;
            animation: typing 1s infinite;
        }

        &__subscribe {
            display: flex;
            padding: 10px;
            background-color: #f9f9fa;
            border: 1px solid #e8e8e8;

            input {
                width: 100px;
                display: block;
                flex-grow: 1;
            }
        }

        &__btn-close {
            position: absolute;
            top: -5px;
            right: 0;

            display: block;
            padding: 8px;

            font-size: 22px;
            height: 22px;

            border-radius: 0 0 0 16px;
            background: #f1f1f1;
        }

        &__btn {
            display: flex;
            align-items: flex-end;
            font-size: 12px;
            line-height: 1;
            padding: 8px;
            border-radius: 3px;
            color: white;
            text-transform: uppercase;
            background: #e4461b;
            border-color: #e4461b;
            outline: none;
            appearance: none;
            border-style: none;

            margin-left: 10px;

            &:hover {
                background: #e4461b;
                border-color: #e4461b;
            }
        }

        @include xs-block {
            left: 5vw;
            bottom: 10px;

            &__author {
                width: 80px;
                height: 80px;
            }

            &__start-message {
                position: absolute;
                left: 80px;
                bottom: 25px;
                min-width: 180px;
            }

            &__offer-message {
                box-sizing: border-box;
                width: 90vw;
                left: 0;
                bottom: 10px;
            }

        }
    }


    @keyframes typing {
        0% {
            width: 4.5px;
        }
        50% {
            width: 10px;
        }
        100% {
            width: 12.18px;
        }
    }


    @keyframes show {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>
