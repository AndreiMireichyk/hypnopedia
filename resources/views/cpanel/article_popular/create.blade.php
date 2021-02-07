@extends('cpanel.layouts.layout')

@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
@section('js')
    @parent
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Laraberg.init('lb_content', {laravelFilemanager: true})
            $('#lfm').filemanager('image');
        });

    </script>
@endsection
@section('content')
    <div id="mainContent">
        <div class="container-fluid">
            @if(Session::has('alert'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('alert')}}
                </div>
            @endif
            @if($errors->count())
                <div class="alert alert-danger" role="alert">
                    Поля заполнены не верно.
                </div>
            @endif

            {!! Form::open(['route' => 'cp.categories.store', 'method' => 'post']) !!}
            <div class="d-f jc-sb ai-c">
                <h4 class="c-grey-900 mT-10 mB-30">Добавление тэга</h4>
                <div>
                    <button type="submit" class="btn cur-p btn-primary">Сохранить</button>
                    <a href="{{route('cp.categories.index', app()->getLocale())}}" class="btn cur-p btn-outline-primary">Назад</a>
                </div>
            </div>

            <div class="row gap-20  pos-r">
                <div class=" col-md-6">
                    <div class="bgc-white h-100p p-20 bd">
                        <h5 class="c-grey-900">Основное</h5>
                        <div class="mT-30">
                            <div class="form-group row">
                                {!! Form::label('title', 'Заголовок статьи', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'id'=>'title', 'placeholder'=>'Заголовок статьи']); !!}
                                    @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('title')])
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('slug', 'Slug', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'id'=>'slug', 'placeholder'=>'Алиас']); !!}
                                    @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('title')])
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="bgc-white h-100p p-20 bd">
                        <h5 class="c-grey-900">Метаданные</h5>
                        <div class="mT-30">
                            <div class="form-group row">
                                {!! Form::label('meta_title', 'Title', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('meta_title', old('meta_title'), ['class' => 'form-control', 'id'=>'meta_title', 'placeholder'=>'Заголовок статьи']); !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('meta_keys', 'Keys', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('meta_keys', old('meta_keys'), ['class' => 'form-control', 'id'=>'meta_keys', 'placeholder'=>'Ключи']); !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('meta_desc', 'Description', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('meta_desc', old('meta_desc'), ['class' => 'form-control', 'id'=>'meta_desc', 'placeholder'=>'Описание']); !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" col-md-12">
                    <div class="bgc-white h-100p p-20 bd">
                        <h5 class="c-grey-900">Описание тэга</h5>
                        <div class="mT-30">
                            <div class="form-group">
                                {!! Form::textarea('lb_content', old('lb_content'), ['class' => 'form-control', 'id'=>'lb_content']); !!}
                                @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('lb_content ')])
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-f jc-sb ai-c">
                <h4 class="c-grey-900 mT-10 mB-30">&nbsp;</h4>
                <div>
                    <button type="submit" class="btn cur-p btn-primary">Сохранить</button>
                    <a href="{{route('cp.categories.index', app()->getLocale())}}" class="btn cur-p btn-outline-primary">Назад</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
