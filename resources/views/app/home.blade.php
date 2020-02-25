@extends('app.layout.layout')

@section('css')
    <link href="{{asset('/css/index.css')}}" rel="stylesheet">
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('/js/index.bundle.js')}}"></script>
@endsection


@section('content')
    <main class="home">
        <section class="sc-1" id="about">
            <div class="sc-1__wrap">
                <div class="sc-1__info">
                    <h1 class="sc-1__title">Another way<br>to your mental health<br>and motivation</h1>
                    <h2 class="sc-1__subtitle">Improve yourself while sleeping with affirmations</h2>
                    <a class="sc-1__app-btn" href="{{env('APP_STORE_URI')}}" target="_blank">
                        <img src="{{asset('/images/app_store_cta.svg')}}" alt="install app">
                    </a>
                </div>
                <div class="sc-1__app"></div>
            </div>
        </section>
        <section class="sc-2" id="how_it_work">
            <div class="sc-2__wrap">
                <div class="sc-2__title">How it works?</div>
                <p class="sc-2__desc">
                    Recent somnology studies confirm that a person is able to perceive information in
                    certain sleep phases to infix existing knowledge. Based on these studies, we have created an algorithm
                    that will help you improve your mental health and increase motivation. Hypnopedia uses Apple Watch
                    sensors to determine the correct phase of sleep for playing affirmations. After a productive sleep the
                    smart alarm clock will wake you up at the most convenient time before the set wake-up time
                </p>
                <p class="sc-2__action"><a class="btn" href="{{env('APP_STORE_URI')}}" target="_blank">Try
                        for free</a></p>
                <ul class="sc-2__steps">
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/install-v1.svg')}}" alt="Install">
                        <div class="sc-2__step-title">Install</div>
                        <div class="sc-2__step-desc">and launch<br>the application</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/choose-v1.svg')}}" alt="Choose">
                        <div class="sc-2__step-title">Choose</div>
                        <div class="sc-2__step-desc">affirmations and set<br>the alarm time</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/sync-v1.svg')}}" alt="Synchronize">
                        <div class="sc-2__step-title">Synchronize</div>
                        <div class="sc-2__step-desc">with Apple Watch<br>to invoke its sensors</div>
                    </li>
                    <li class="sc-2__step-item">
                        <img class="sc-2__step-icon" src="{{asset('/images/night-v1.svg')}}" alt="Nighty-night!">
                        <div class="sc-2__step-title">Nighty-night!</div>
                        <div class="sc-2__step-desc">Our algorithm will take care<br>of you during sleep</div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="sc-3" id="features">
            <div class="sc-3__wrap">
                <div class="sc-3__title">Main features</div>
                <div class="sc-3__features">
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/1.png')}}" alt="HYPNOPEDIA">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">HYPNOPEDIA</div>
                            <div class="sc-3__feature-desc">Unique algorithms<br>based on recent<br>sleep studies</div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/2.png')}}" alt="SMART-ALARM">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">SMART-ALARM</div>
                            <div class="sc-3__feature-desc">Built-in Smart Alarm<br>wakes you at the most<br>convenient
                                moment<br>of your sleep
                            </div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/3.png')}}" alt="360-DEGREE ASMR">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">360-DEGREE ASMR</div>
                            <div class="sc-3__feature-desc">ASMR sounds with<br>3D effect for deep<br>relaxation and
                                meditation
                            </div>
                        </div>
                    </div>
                    <div class="sc-3__feature">
                        <img class="sc-3__feature-cover" src="{{asset('/images/4.png')}}" alt="STATISTICS">
                        <div class="sc-3__feature-info">
                            <div class="sc-3__feature-title">STATISTICS</div>
                            <div class="sc-3__feature-desc">Your personal<br>summary data</div>
                        </div>
                    </div>
                </div>
                <div class="sc-3__action">
                    <a class="btn" href="{{env('APP_STORE_URI')}}" target="_blank">Try for free</a>
                </div>
            </div>
        </section>
        <section class="sc-4" id="science">
            <div class="sc-4__wrap">
                <div class="sc-4__sciences science">
                    <div class="science__h">Science</div>
                    <div class="science__list">
                        <div class="science__item">
                            <div class="science__title">Nature Communications</div>
                            <div class="science__desc">Formation and suppression of acoustic memories during human sleep
                            </div>
                            <div class="science__action">
                                <a class="science__btn" href="https://www.nature.com/articles/s41467-017-00071-z" target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                        <div class="science__item">
                            <div class="science__title">Oxford academic</div>
                            <div class="science__desc">Implicit memory for words heard during sleep</div>
                            <div class="science__action">
                                <a class="science__btn" href="https://academic.oup.com/nc/article/2016/1/niw014/2757134" target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                        <div class="science__item">
                            <div class="science__title">ScienceDirect</div>
                            <div class="science__desc">Inducing task-relevant responses to speech in the sleeping brain
                            </div>
                            <div class="science__action">
                                <a class="science__btn" href="https://www.sciencedirect.com/science/article/pii/S0960982214009944" target="_blank">read more &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc-4__doctor doctor">
                    <div class="doctor__cover"></div>
                    <div class="doctor__name">Andrew Sokol</div>
                    <div class="doctor__role">Brain Geek, Associate Professor, MD, PhD Belarussian state medical
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
        </section>
    </main>
@endsection
