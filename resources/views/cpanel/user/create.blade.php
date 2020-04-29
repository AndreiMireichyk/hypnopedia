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

            {!! Form::open(['route' => 'cp.users.store', 'method' => 'post']) !!}
            <div class="d-f jc-sb ai-c">
                <h4 class="c-grey-900 mT-10 mB-30">Добавление пользователя</h4>
                <div>
                    <button type="submit" class="btn cur-p btn-primary">Сохранить</button>
                    <a href="{{route('cp.users.index')}}" class="btn cur-p btn-outline-primary">Назад</a>
                </div>
            </div>

            <div class="row gap-20  pos-r">

                <div class=" col-md-6">
                    <div class="bgc-white h-100p p-20 bd">
                        <h5 class="c-grey-900">Основное</h5>
                        <div class="mT-30">

                            <div class="form-group row">
                                {!! Form::label('name', 'Имя', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'id'=>'name', 'placeholder'=>'Имя']); !!}
                                    @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('name')])
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('email', 'Email', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'id'=>'email', 'placeholder'=>'Почта']); !!}
                                    @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('email')])
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('password', 'Пароль', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::password('password',['class' => 'form-control', 'id'=>'password', 'placeholder'=>'Пароль']); !!}
                                    @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('password')])
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('password_confirmation', 'Повторите пароль', ['class' => 'col-sm-4 col-form-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'id'=>'title', 'placeholder'=>'Повторите пароль']); !!}
                                    @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('password_confirmation')])
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=" col-md-6">
                    <div class="bgc-white h-100p p-20 bd">
                        <h5 class="c-grey-900">Аватар</h5>
                        <div class="mT-30">
                            <a href="javascript:void(0)" id="lfm" data-input="thumbnail" data-preview="holder"
                               class="btn cur-p btn-primary">
                                <i class="fa fa-picture-o"></i> Выбрать/Загрузить
                            </a>
                            <input id="thumbnail" class="form-control" type="hidden" name="avatar_path" value="{{old('avatar_path')}}">
                            <div>
                                <img id="holder" style="margin-top:15px;max-height:180px;" src="{{old('avatar_path')}}">
                            </div>
                            @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('avatar_path')])
                        </div>
                    </div>
                </div>



            </div>

            <div class="d-f jc-sb ai-c">
                <h4 class="c-grey-900 mT-10 mB-30">&nbsp;</h4>
                <div>
                    <button type="submit" class="btn cur-p btn-primary">Сохранить</button>
                    <a href="{{route('cp.users.index')}}" class="btn cur-p btn-outline-primary">Назад</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
