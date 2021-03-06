@extends('cpanel.layouts.layout')


@section('content')
    <div id="mainContent">
        <div class="container-fluid">
            @if(Session::has('alert'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('alert')}}
                </div>
            @endif

            <div class="d-f jc-sb ai-c">
                <h4 class="c-grey-900 mT-10 mB-30">Тэги</h4>
                <a href="{{route('cp.categories.create', app()->getLocale())}}" class="btn cur-p btn-primary">Добавить тэг</a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Статей с тэгом</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Статей с тэгом</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td><a href="{{route('blog.category', ['slug'=>$category->slug, 'locale'=> app()->getLocale()])}}">{{$category->title}}</a></td>
                                    <td>{{$category->articles()->count()}}</td>
                                    <td class="ta-r">
                                        <a href="{{route('cp.categories.edit', ['category'=>$category->id, 'locale'=> app()->getLocale()])}}"
                                           class="btn btn-sm cur-p btn-primary">Изменить</a>
                                        {!! Form::open(['route' => ['cp.categories.destroy', ['category'=>$category->id, 'locale'=> app()->getLocale()]], 'method' => 'delete', 'style'=>'display: inline-block;']) !!}
                                            <button type="submit" class="btn btn-sm cur-p btn-danger">
                                                Удалить
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
