@extends('cpanel.layouts.layout')

@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
@section('js')
    @parent
    <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <script>
        Laraberg.init('content', { laravelFilemanager: true })
    </script>
@endsection
@section('content')
    <div id="mainContent">
        <div class="container-fluid">
            <div class="d-f jc-sb ai-c">
                <h4 class="c-grey-900 mT-10 mB-30">Добавление статьи</h4>
                <div>
                    <a href="{{route('cp.articles.create')}}" class="btn cur-p btn-primary">Сохранить</a>
                    <a href="{{route('cp.articles.index')}}" class="btn cur-p btn-outline-primary">Назад</a>
                </div>
            </div>

            <div class="row gap-20  pos-r">
                <div class=" col-md-6">
                    <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Основное</h6>
                        <div class="mT-30">
                            <form {{--class="container was-validated" novalidate--}}>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Заголовок статьи</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Заголовок статьи" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Категории</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Категории">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Показывать статью</label>
                                    <div class="col-sm-8">
                                        <div class="checkbox checkbox-circle checkbox-info peers ai-c pT-10">
                                            <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                            <label for="inputCall1" class="peers peer-greed js-sb ai-c">
                                                <span class="peer peer-greed">Да, показывать</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Метаданные</h6>
                        <div class="mT-30">
                            <form>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Title</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Заголовок">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Keys</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Ключи">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Описание">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Анонс</h6>
                        <div class="mT-30">
                            <form>

                                <div class="form-group">
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Обложка</h6>
                        <div class="mT-30">
                            <form>

                                <div class="form-group">
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12">
                    <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Статья</h6>
                        <div class="mT-30">
                            <form>

                                <div class="form-group">
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-f jc-sb ai-c">
                <h4 class="c-grey-900 mT-10 mB-30">&nbsp;</h4>
                <div>
                    <a href="{{route('cp.articles.create')}}" class="btn cur-p btn-primary">Сохранить</a>
                    <a href="{{route('cp.articles.index')}}" class="btn cur-p btn-outline-primary">Назад</a>
                </div>
            </div>
        </div>
    </div>
@endsection
