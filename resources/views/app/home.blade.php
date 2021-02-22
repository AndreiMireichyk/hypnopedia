@extends('app.layout.layout')

@section('title', 'Sleep and Learn with Hypnopedia')

@section('meta_desc', 'Improve your mental health and change your life through motivating affirmations with Hypnopedia App.')

@section('css')
    @parent
    <link href="{{asset('/css/index.css')}}?{{env('VERSION')}}" rel="stylesheet">
@endsection

@section('js')
    @parent
    <script src="{{asset('/js/index.bundle.js')}}?{{env('VERSION')}}"></script>
@endsection


@section('content')
    <main class="home">
        <div class="sc-1" id="about">
            <div class="sc-1__wrap">
                <div class="sc-1__info">
                    {{--<a class="sc-1__badge" href="https://www.producthunt.com/golden-kitty-awards-2020/health-and-fitness" target="_blank"><img src="{{asset('/images/ph_badge.svg')}}?{{env('VERSION')}}" alt="producthunt"></a>--}}
                    <h1 class="sc-1__title">@lang('home.sc1.title')</h1>
                    <h2 class="sc-1__subtitle">@lang('home.sc1.description')</h2>
                    <div class="sc-1__watch-video">
                        <a class="btn" href="javascript:void(0)" data-toggle="modal" data-target="#video">
                            @lang('home.sc1.watch')
                        </a>
                    </div>
                    <a class="sc-1__app-btn" href="https://hypnopedia.onelink.me/gHSS/f769efa4" target="_blank">
                        <img src="{{asset('/images/app_store_cta.svg')}}?{{env('VERSION')}}" alt="install app">
                    </a>
                </div>
                <div class="sc-1__app device">
                    <div class="device__phone">
                        <img src="/images/X-phone-animation.png" alt="X-phone-animation">
                        <div class="device__animation">
                            <div class="device__ring device__ring-1"></div>
                            <div class="device__ring device__ring-2"></div>
                            <div class="device__ring device__ring-3"></div>
                            <div class="device__ring device__ring-3"></div>
                            <a class="device__ring device__play" href="javascript:void(0)" data-toggle="modal" data-target="#video">
                                <img class="play" src="/images/play-2.svg" alt="play">
                                <img class="watch" src="/images/WATCH.svg" alt="WATCH">
                                <img class="video" src="/images/VIDEO.svg" alt="VIDEO">
                            </a>
                        </div>
                    </div>
                    <div class="device__watch"></div>
                </div>
            </div>
        </div>
        <div class="sc-2" id="how_it_work">
            <div class="sc-2__wrap">
                <div class="sc-2__title">@lang('home.sc2.title')
                    <div class="sc-2__title-img"><img src="/images/health.svg" alt="health"></div>
                </div>
                <p class="sc-2__desc">@lang('home.sc2.description')</p>
                <p class="sc-2__action">
                    <a class="btn gtm-app-store-sc-2" href="https://hypnopedia.onelink.me/gHSS/f769efa4" target="_blank">
                        @lang('home.sc2.action')
                    </a>
                </p>
                <ul class="sc-2__steps">
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/install-v1.svg')}}?{{env('VERSION')}}"
                             alt="Install">
                        <div class="sc-2__step-title">@lang('home.sc2.steps.one.title')</div>
                        <div class="sc-2__step-desc">@lang('home.sc2.steps.one.desc')</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/choose-v1.svg')}}?{{env('VERSION')}}"
                             alt="Choose">
                        <div class="sc-2__step-title">@lang('home.sc2.steps.two.title')</div>
                        <div class="sc-2__step-desc">@lang('home.sc2.steps.two.desc')</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/sync-v1.svg')}}?{{env('VERSION')}}"
                             alt="Synchronize">
                        <div class="sc-2__step-title">@lang('home.sc2.steps.three.title')</div>
                        <div class="sc-2__step-desc">@lang('home.sc2.steps.three.desc')</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/night-v1.svg')}}?{{env('VERSION')}}"
                             alt="Nighty-night!">
                        <div class="sc-2__step-title">@lang('home.sc2.steps.four.title')</div>
                        <div class="sc-2__step-desc">@lang('home.sc2.steps.four.desc')</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sc-3" id="features">
            <div class="sc-3__wrap">
                <div class="sc-3__title">@lang('home.sc3.title')</div>
                <div class="sc-3__features">
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/1.jpg')}}?{{env('VERSION')}}"
                             alt="HYPNOPEDIA">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">@lang('home.sc3.steps.one.title')</div>
                            <div class="sc-3__feature-desc">@lang('home.sc3.steps.one.desc')</div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/2.jpg')}}?{{env('VERSION')}}"
                             alt="SMART-ALARM">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">@lang('home.sc3.steps.two.title')</div>
                            <div class="sc-3__feature-desc">@lang('home.sc3.steps.two.desc')</div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/3.jpg')}}?{{env('VERSION')}}"
                             alt="360-DEGREE ASMR">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">@lang('home.sc3.steps.three.title')</div>
                            <div class="sc-3__feature-desc">@lang('home.sc3.steps.three.desc')</div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/4.jpg')}}?{{env('VERSION')}}"
                             alt="STATISTICS">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">@lang('home.sc3.steps.four.title')</div>
                            <div class="sc-3__feature-desc">@lang('home.sc3.steps.four.desc')</div>
                        </div>
                    </div>
                </div>
                <div class="sc-3__action">
                    <a class="btn gtm-app-store-sc-3" href="https://hypnopedia.onelink.me/gHSS/f769efa4" target="_blank">@lang('home.sc3.action')</a>
                </div>
            </div>
        </div>
        <div class="sc-4" id="sc">
            <div class="sc-4__wrap">
                <div class="sc-4__sciences science">
                    <div class="science__h">@lang('home.sc4.title')</div>
                    <div class="science__list">
                        <div class="science__item">
                            <div class="science__title">Nature Communications</div>
                            <div class="science__desc">
                                Formation and suppression of acoustic memories during human sleep
                                <a class="science__btn" href="https://www.nature.com/articles/s41467-017-00071-z"
                                   target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                        <div class="science__item">
                            <div class="science__title">Oxford academic</div>
                            <div class="science__desc">
                                Implicit memory for words heard during sleep
                                <a class="science__btn" href="https://academic.oup.com/nc/article/2016/1/niw014/2757134"
                                   target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                        <div class="science__item">
                            <div class="science__title">ScienceDirect</div>
                            <div class="science__desc">
                                Inducing task-relevant responses to speech in the sleeping brain
                                <a class="science__btn"
                                   href="https://www.sciencedirect.com/science/article/pii/S0960982214009944"
                                   target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                        <div class="science__item">
                            <div class="science__title">ResearchGate</div>
                            <div class="science__desc">
                                The cessation of rumination through self-affirmation
                                <a class="science__btn"
                                   href="https://www.researchgate.net/publication/232588088_The_cessation_of_rumination_through_self-affirmation"
                                   target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                        <div class="science__item">
                            <div class="science__title">
                                The National Center
                                for Biotechnology Information
                            </div>
                            <div class="science__desc">
                                Self-affirmation alters the brain’s response to health messages and subsequent behavior
                                change
                                <a class="science__btn"
                                   href="https://www.researchgate.net/publication/44632875_When_Self-Affirmations_Reduce_Defensiveness_Timing_Is_Key"
                                   target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc-4__doctor doctor">
                    <div class="doctor__cover"></div>
                    <div class="doctor__name">
                        @lang('home.sc4.name')
                        <a class="doctor__fb" href="https://www.facebook.com/Dr.Andrrrew" target="_blank">
                            <img src="{{asset('/images/fb_andrew.svg')}}">
                        </a>
                    </div>
                    <div class="doctor__position">@lang('home.sc4.position')</div>
                    <div class="doctor__role">@lang('home.sc4.role')</div>
                    <div class="doctor__quote">
                        <div class="doctor__quote-text">@lang('home.sc4.quotes.one.text')</div>
                        <div class="doctor__quote-author">@lang('home.sc4.quotes.one.author')</div>
                    </div>
                    <div class="doctor__quote">
                        <div class="doctor__quote-text">@lang('home.sc4.quotes.two.text')</div>
                        <div class="doctor__quote-author">@lang('home.sc4.quotes.two.author')</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-5" id="faq">
            <div class="sc-5__wrap">
                <div class="sc-5__title">@lang('home.sc5.title')</div>
                <div class="sc-5__accordion">
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.one.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.one.answer')</div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.two.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.two.answer')</div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.three.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.three.answer')</div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.four.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.four.answer')</div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.five.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.five.answer')</div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.six.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.six.answer')</div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.seven.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.seven.answer')</div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">@lang('home.sc5.questions.eight.question')</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">@lang('home.sc5.questions.eight.answer')</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="video" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content"><a class="modal-close" href="javascript:void(0)"
                                              data-dismiss="modal">&times;</a>
                    <iframe src="https://www.youtube.com/embed/YUp619eJObU?enablejsapi=1"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection
