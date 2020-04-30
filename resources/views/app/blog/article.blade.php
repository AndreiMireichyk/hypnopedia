@extends('app.layout.layout')

@section('title', $article->meta_title)

@section('meta_keys', $article->meta_keys)

@section('meta_desc', $article->meta_desc)

@section('og-title', $article->title)

@section('og-desc', $article->meta_desc)

@section('og-url', url()->current())

@section('og-img', URL::asset($article->cover_path))

@section('is_light', 'light')

@section('css')
    @parent
    <link href="{{asset('/css/article.css')}}?{{env('VERSION')}}" rel="stylesheet">
@endsection

@section('js')
    @parent
    <script type="text/javascript" src="{{asset('/js/article.bundle.js')}}?{{env('VERSION')}}"></script>
@endsection

@section('content')
    <main class="article">
        <section class="article__cover" style="background-image: url({{asset($article->cover_path)}})">
            <h1 class="article__title">{{$article->title}}</h1>
            <div class="article__socials socials">
                <a class="socials__item fb" href="javascript:void(0)" onclick="window.share.facebook('{{url()->current()}}','{{$article->title}}', '{{URL::asset($article->cover_path)}}','{{$article->meta_desc}}')"></a>
                <a class="socials__item vk" href="javascript:void(0)" onclick="window.share.vkontakte('{{url()->current()}}','{{$article->title}}', '{{URL::asset($article->cover_path)}}','{{$article->meta_desc}}')"></a>
                <a class="socials__item in" href="javascript:void(0)" onclick="window.share.linkedin('{{url()->current()}}','{{$article->title}}')"></a>
            </div>
        </section>
        <section class="article__main">
            <div class="article__content">
                {!! $article->lb_content !!}
            </div>
            <div class="article__group">
                <div class="article__published">Publication date: {{$article->created_at->diffForHumans()}}</div>
                <div class="article__socials socials">
                    <a class="socials__item fb-c" href="javascript:void(0)" onclick="window.share.facebook('{{url()->current()}}','{{$article->title}}', '{{URL::asset($article->cover_path)}}','{{$article->meta_desc}}')"></a>
                    <a class="socials__item vk-c" href="javascript:void(0)" onclick="window.share.vkontakte('{{url()->current()}}','{{$article->title}}', '{{URL::asset($article->cover_path)}}','{{$article->meta_desc}}')"></a>
                    <a class="socials__item in-c" href="javascript:void(0)" onclick="window.share.linkedin('{{url()->current()}}','{{$article->title}}')"></a>
                </div>
            </div>
            <div class="article__categories categories">
                @foreach($article->categories as $category)
                    <a class="categories__item" href="{{route('blog.category', $category->slug)}}">
                        {{$category->title}}
                    </a>
                @endforeach
            </div>
        </section>
        <section class="article__aside">
            <div class="collection">
                <div class="collection__title">Latest news</div>
                <div class="collection__list">
                    @foreach($lastFiveArticles as $key=>$article)
                        <div class="collection__item">
                            <div class="collection__num">{{$key+1}}</div>
                            <div class="collection__info">
                                <a class="collection__article" href="{{route('blog.article',$article->slug)}}">{{$article->title}}</a>
                                <a class="collection__category" href="{{route('blog.category', $article->categories->first()->slug)}}">{{$article->categories->first()->title}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="collection">
                <div class="collection__title">Related materials:</div>
                <div class="collection__list">
                    <div class="collection__item">
                        <div class="collection__num">1</div>
                        <div class="collection__info"><a class="collection__article">The unique construction of the
                                BiXBiT installation has been patented in Russia and Belarus</a><a
                                class="collection__category">BiXBiT</a></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

