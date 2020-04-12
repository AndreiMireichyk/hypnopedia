@extends('app.layout.layout')

@section('css')
    <link href="{{asset('/css/contacts.css?v1')}}?{{env('VERSION')}}" rel="stylesheet">
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('/js/contacts.bundle.js?v1')}}?{{env('VERSION')}}"></script>
@endsection

@section('content')
    <main class="contacts">
        <div class="contacts__wrap">
            <div class="contacts__address address">
                <div class="address__title">Address</div>
                <a class="address__point" href="">Belarus, Minsk, Karla Marksa 25, room 4H , 220030</a>
                <a class="address__point" href="mailto:info@hypnopedia.site">info@hypnopedia.site</a>
                <div class="address__socials">
                    <a class="address__social fb" href="https://www.facebook.com/hypnopedia.application" target="_blank">
                        <img src="{{asset('/images/fbook.svg')}}">
                    </a>
                    <a class="address__social tw" href="https://twitter.com/Hypnopedia_app" target="_blank">
                        <img src="{{asset('/images/1200px-Twitter.png')}}">
                    </a>
                </div>
            </div>
            <div class="contacts__form" id="js-form">
                <div class="form" v-if="!accept">
                    <h1 class="form__title">Contact</h1>
                    <div class="form__input" :class="{'has-error': error.name.length }">
                        <input placeholder="Name" v-model="name"><small>@{{ error.name }}</small>
                    </div>
                    <div class="form__input" :class="{'has-error': error.contact.length }">
                        <input placeholder="Contact" v-model="contact"><small>@{{ error.contact }}</small>
                    </div>
                    <div class="form__input" :class="{'has-error': error.message.length }">
                        <textarea placeholder="Message" v-model="message"></textarea><small>@{{ error.message }}</small>
                    </div>
                    <div class="form__checkbox">
                        <input id="accept" type="checkbox" v-model="accept_policy">
                        <label for="accept">I accept personal data processing agreement</label>
                    </div>
                    <div class="form__action"><a class="form__btn" href="javascript:void(0)" :class="{'disabled': !accept_policy || loading }" @click.stop="send">Submit</a></div>
                </div>
                <div class="accept" v-else><a class="accept__close" href="javascript:void(0)" @click.stop="accept=false"></a><img class="accept__icon" src="/images/accept.svg">
                    <p class="accept__text">Excellent! We'll contact you soon.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
