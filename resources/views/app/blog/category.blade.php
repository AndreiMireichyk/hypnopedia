@extends('app.layout.layout')

@section('title', $category->meta_title)

@section('meta_keys', $category->meta_keys)

@section('meta_desc', $category->meta_desc)

@section('is_light', 'light')

@section('css')
    @parent
    <link href="{{asset('/css/blog.css')}}?{{env('VERSION')}}" rel="stylesheet">
@endsection

@section('js')
    @parent
    <script type="text/javascript" src="{{asset('/js/blog.bundle.js')}}?{{env('VERSION')}}"></script>
@endsection

@section('content')
    <main class="blog">

        <section class="blog__category category">
            <h1 class="category__title">{{$category->title}}</h1>
            <p class="category__desc"> {!! $category->lb_content !!}</p>
        </section>

        <section class="blog__title">Latest news</section>

        <section class="blog__body body">
            <div class="body__main">

                @foreach ($articles as $article)
                    <div class="body__post md-post">
                        <a class="md-post__cover" href="{{route('blog.article', $article->slug)}}"
                           style="background-image: url('{{$article->cover_path}}')"></a>
                        <a class="md-post__title"
                           href="{{route('blog.article', $article->slug)}}">{{$article->title}}</a>
                        <div class="md-post__desc">{{$article->announcement}}</div>
                        <div class="md-post__group">
                            <a class="lg-post__category"
                               href="{{route('blog.category', $article->categories->first()->slug)}}">
                                {{$article->categories->first()->title}}
                            </a>
                            <a class="md-post__date" href="{{route('blog.article', $article->slug)}}">
                                {{$article->created_at->diffForHumans()}}
                            </a>
                            <a class="md-post__read" href="{{route('blog.article', $article->slug)}}">
                                READ {{$article->readingMin}} MIN
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="body__aside">
                <div class="aside">
                    @if($populars->isNotEmpty())
                        <div class="aside__title">Popular articles</div>
                        <div class="popular">
                            @foreach($populars as $key => $popular)
                                <div class="popular__item">
                                    <div class="popular__num">{{$key+1}}</div>
                                    <div class="popular__group">
                                        <a class="popular__title"
                                           href="{{route('blog.article', $popular->article->slug)}}">{{$popular->article->title}}</a>
                                        <a class="popular__category"
                                           href="{{route('blog.category', $popular->article->categories->first()->slug)}}">{{$popular->article->categories->first()->title}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="aside__title">Tags</div>
                    <div class="aside-cat">
                        @foreach($categories as $key=>$category)
                            <a class="aside-cat__item" href="{{route('blog.category', $category->slug)}}">
                                {{$category->title}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="blog__pagination pagination">
            {{ $articles->links('app.layout.pagination') }}
        </section>
    </main>
@endsection
