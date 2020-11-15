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
                    <h1 class="sc-1__title">A new way to enhance<br>your mental health<br>and motivation</h1>
                    <h2 class="sc-1__subtitle">Improve yourself while sleeping with affirmations</h2>
                    <div class="sc-1__watch-video">
                        <a class="btn" href="javascript:void(0)" data-toggle="modal" data-target="#video">Watch
                            video</a></div>
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
                            <div class="device__ring device__ring-3"></div><a class="device__ring device__play" href="javascript:void(0)" data-toggle="modal" data-target="#video"><img class="play" src="/images/play-2.svg" alt="play"><img class="watch" src="/images/WATCH.svg" alt="WATCH"><img class="video" src="/images/VIDEO.svg" alt="VIDEO"></a>
                        </div>
                    </div>
                    <div class="device__watch"></div>
                </div>
            </div>
        </div>
        <div class="sc-2" id="how_it_work">
            <div class="sc-2__wrap">
                <div class="sc-2__title">How it works?
                    <div class="sc-2__title-img"><img src="/images/health.svg" alt="health"></div>
                </div>
                <p class="sc-2__desc">
                    Recent somnology studies confirm that a person is able to perceive information in
                    certain sleep phases to infix existing knowledge. <a class="sc-2__post-link" target="_blank"
                                                                         href="https://www.sciencedirect.com/science/article/pii/S0960982214009944">Based
                        on these studies</a>, we have created an algorithm
                    that will help you improve your mental health and increase motivation. Hypnopedia uses Apple Watch
                    sensors to determine the correct phase of sleep for playing affirmations. After a productive sleep
                    the
                    smart alarm clock will wake you up at the most convenient time before the set wake-up time
                </p>
                <p class="sc-2__action">
                    <a class="btn gtm-app-store-sc-2" href="https://hypnopedia.onelink.me/gHSS/f769efa4" target="_blank">
                        Try for free
                    </a>
                </p>
                <ul class="sc-2__steps">
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/install-v1.svg')}}?{{env('VERSION')}}"
                             alt="Install">
                        <div class="sc-2__step-title">Install</div>
                        <div class="sc-2__step-desc">and launch<br>the application</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/choose-v1.svg')}}?{{env('VERSION')}}"
                             alt="Choose">
                        <div class="sc-2__step-title">Choose</div>
                        <div class="sc-2__step-desc">affirmations and set<br>the alarm time</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/sync-v1.svg')}}?{{env('VERSION')}}"
                             alt="Synchronize">
                        <div class="sc-2__step-title">Synchronize</div>
                        <div class="sc-2__step-desc">with Apple Watch<br>to invoke its sensors</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/night-v1.svg')}}?{{env('VERSION')}}"
                             alt="Nighty-night!">
                        <div class="sc-2__step-title">Nighty-night!</div>
                        <div class="sc-2__step-desc">Our algorithm will take care<br>of you during sleep</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sc-3" id="features">
            <div class="sc-3__wrap">
                <div class="sc-3__title">Main features</div>
                <div class="sc-3__features">
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/1.jpg')}}?{{env('VERSION')}}"
                             alt="HYPNOPEDIA">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">HYPNOPEDIA</div>
                            <div class="sc-3__feature-desc">Based on unique<br>algorithms determines<br>your sleep phase<br>and
                                plays affirmations
                            </div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/2.jpg')}}?{{env('VERSION')}}"
                             alt="SMART-ALARM">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">SMART-ALARM</div>
                            <div class="sc-3__feature-desc">
                                Built-in Smart Alarm<br>wakes you at the most<br>convenient moment
                            </div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/3.jpg')}}?{{env('VERSION')}}"
                             alt="360-DEGREE ASMR">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">360-DEGREE ASMR</div>
                            <div class="sc-3__feature-desc">ASMR sounds with<br>3D effect for deep<br>relaxation and
                                meditation
                            </div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/4.jpg')}}?{{env('VERSION')}}"
                             alt="STATISTICS">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">STATISTICS</div>
                            <div class="sc-3__feature-desc">Summary data<br>of your last<br>sleep session</div>
                        </div>
                    </div>
                </div>
                <div class="sc-3__action">
                    <a class="btn gtm-app-store-sc-3" href="https://hypnopedia.onelink.me/gHSS/f769efa4" target="_blank">Try for free</a>
                </div>
            </div>
        </div>
        <div class="sc-4" id="science">
            <div class="sc-4__wrap">
                <div class="sc-4__sciences science">
                    <div class="science__h">Science</div>
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
                    <div class="doctor__name">Andrew Sokol</div>
                    <div class="doctor__position">CEO</div>
                    <div class="doctor__role">Brain Geek, Associate Professor, MD,<br> PhD Belarusian state medical
                        university
                    </div>
                    <div class="doctor__quote">
                        <div class="doctor__quote-text">“Dreams are the royal road to the unconscious.”</div>
                        <div class="doctor__quote-author">S. Freud</div>
                    </div>
                    <div class="doctor__quote">
                        <div class="doctor__quote-text">“It would be a regrettable omission to go around.”</div>
                        <div class="doctor__quote-author">A. Sokol</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-5" id="faq">
            <div class="sc-5__wrap">
                <div class="sc-5__title">FAQ</div>
                <div class="sc-5__accordion">
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">What is necessary to work with Hypnopedia?</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">You will need an iPhone, Apple Watch and an application
                            installed from the App Store. Apple Watch synchronizes with your smartphone and transfers
                            the user's biological parameters to it.
                        </div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">Which iPhone / Apple Watch models are compatible?</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">Hypnopedia supports iPhones 6 and later, as well as all
                            Apple Watch / iPod touch models, with iOS 11 / watchOS 5.0 and later.
                        </div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">How much of battery charge does the app consume?</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">
                            Depending on the model and condition of the battery, as well as the duration of sleep, the
                            consumption per night is:<br>
                            20-30% for iPhone;<br>
                            30-40% for Apple Watch.


                        </div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">Where does the sound come from?</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">The sound of affirmations comes from the speakers of
                            your smartphone. However, you can use any headphones compatible with your device.
                        </div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">Do i need to stay awake in the meantime?</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">No. The app is designed so that everything happens
                            while you sleep. You don’t wake up or hear inspirational statements at all. Affirmations
                            interact directly with the subconscious.
                        </div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">How does Hypnopedia affect sleep?</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">Hypnopedia does not affect sleep in any way, but uses
                            this time to enhance your mental health and motivation. The app adapts to individual
                            biological characteristics and works in tune with your lifestyle.
                        </div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">What if i see "Watch Application is not installed"?</div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">The Apple Watch app installs automatically and may take
                            several minutes in some cases.
                            If apps manual installation is set in the Apple Watch settings, then Hypnopedia installation
                            must be confirmed in the ‘AVAILABLE APPS’ section of the Watch application.
                        </div>
                    </div>
                    <div class="sc-5__accordion-item">
                        <div class="sc-5__accordion-head">
                            <div class="sc-5__accordion-title">What to do at "Wait till iPhone is synchronized with
                                Apple Watch" stage?
                            </div>
                            <i class="icon-Polygon-1"></i>
                        </div>
                        <div class="sc-5__accordion-description">Make sure that your Apple Watch is unlocked and the
                            Hypnopedia logo appears on the screen. The synchronization process may take several minutes
                        </div>
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
