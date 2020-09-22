@extends('app.layout.layout')

@section('title', 'LLC Pyrat contact page | Hypnopedia')

@section('meta_desc', 'Hypnopedia startup is based on scientific researchers, focused on mental health and effective sleep.')

@section('css')
    @parent
    <link href="{{asset('/css/contacts.css?v1')}}?{{env('VERSION')}}" rel="stylesheet">
@endsection

@section('js')
    @parent
    <script src="{{asset('/js/contacts.bundle.js?v1')}}?{{env('VERSION')}}"></script>
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
                        <img src="{{asset('/images/fbook.svg')}}" alt="facebook">
                    </a>
                    <a class="address__social tw" href="https://twitter.com/Hypnopedia_app" target="_blank">
                        <img src="{{asset('/images/1200px-Twitter.png')}}" alt="Twitter">
                    </a>
                </div>
            </div>
            <div id="contacts_form"></div>
        </div>
    </main>
@endsection
