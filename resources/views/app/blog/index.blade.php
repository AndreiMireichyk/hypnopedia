@extends('app.layout.layout')

@section('title', 'Blog')

@section('meta_desc', '')

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
        @if($categories->isNotEmpty() && $articles->currentPage() === 1)
            <section class="blog__categories categories">

                <div class="categories__tabs nav nav-tabs" role="tablist">
                    @foreach($categories as $key=>$category)
                        @if ($category->articles->isEmpty())
                            @continue
                        @endif
                        <a class="categories__tab {{$categories->first()->id === $category->id ? 'active' : ''}}" data-toggle="tab"
                           href="#cat-{{$category->id}}">{{$category->title}}</a>
                    @endforeach
                </div>

                <div class="tab-content">
                    @foreach($categories as $key=>$category)

                        @if ($category->articles->isEmpty())
                            @continue
                        @endif

                        <div class="categories__articles top-article tab-pane {{$categories->first()->id === $category->id ? 'active' : ''}}"
                             id="cat-{{$category->id}}" role="tabpanel">

                            @foreach ($category->articles->take(1) as $article)
                                <div class="top-article__left">
                                    <div class="lg-post">
                                        <a class="lg-post__cover" href="{{route('blog.article', $article->slug)}}"
                                           style="background-image: url('{{$article->cover_path}}')"></a>
                                        <a class="lg-post__title"
                                           href="{{route('blog.article', $article->slug)}}">{{$article->title}}</a>
                                        <div class="lg-post__desc">{{$article->announcement}}</div>
                                        <div class="lg-post__group">
                                            <a class="lg-post__category"
                                               href="{{route('blog.category', $article->categories->first()->slug)}}">
                                                {{$article->categories->first()->title}}
                                            </a>
                                            <a class="lg-post__date" href="{{route('blog.article', $article->slug)}}">
                                                {{$article->created_at->diffForHumans()}}
                                            </a>
                                            <a class="lg-post__read" href="{{route('blog.article', $article->slug)}}">
                                                READ {{$article->readingMin}} MIN
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="top-article__right">
                                @foreach ($category->articles->slice(1)->take(3) as $article)
                                    <div class="sm-post">
                                        <div class="sm-post__grid">
                                            <a class="sm-post__cover" href="{{route('blog.article', $article->slug)}}"
                                               style="background-image: url({{$article->cover_path}})"></a>
                                            <div class="sm-post__info">
                                                <a class="sm-post__title"
                                                   href="{{route('blog.article', $article->slug)}}">{{$article->title}}</a>
                                                <div class="sm-post__desc">{{$article->announcement}}</div>
                                                <div class="sm-post__group">
                                                    <a class="sm-post__category"
                                                       href="{{route('blog.category', $article->categories->first()->slug)}}">
                                                        {{$article->categories->first()->title}}
                                                    </a>
                                                    <a class="sm-post__date"
                                                       href="{{route('blog.article', $article->slug)}}">
                                                        {{$article->created_at->diffForHumans()}}
                                                    </a>
                                                    <a class="sm-post__read"
                                                       href="{{route('blog.article', $article->slug)}}">
                                                        READ {{$article->readingMin}} MIN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($category->articles->count())
                                <div class="top-article__bootom">
                                    <a class="top-article__btn" href="{{route('blog.category', $category->slug)}}">All
                                        articles</a>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <h1 class="blog__title">Latest news</h1>

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
