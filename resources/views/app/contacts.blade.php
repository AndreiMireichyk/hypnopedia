@extends('app.layout.layout')

@section('title', 'LLC Pyrat contact page | Hypnopedia')

@section('meta_desc', 'Hypnopedia startup is based on scientific researchers, focused on mental health and effective sleep.')

@section('css')
    @parent
    <link href="{{asset('/css/contacts.css?v1')}}?{{env('VERSION')}}" rel="stylesheet">
@endsection

@section('js')
    @parent
    <script defer>
        window.lang = {
            name: '@lang('contacts.name')',
            contact: '@lang('contacts.contact')',
            message: '@lang('contacts.message')',
            terms: '@lang('contacts.terms')',
            submit: '@lang('contacts.btn')',
            tnx: "@lang('contacts.tnx')"
        };
    </script>
    <script defer src="{{asset('/js/contacts.bundle.js?v1')}}?{{env('VERSION')}}"></script>
@endsection

@section('content')
    <main class="contacts">
        <div class="contacts__wrap">
            <div class="contacts__address address">
                <div class="address__title">@lang('contacts.address_title')</div>
                <a class="address__point" href="">@lang('contacts.address')</a>
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

    @include('app.shema.contacts')
@endsection
