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
                <h4 class="c-grey-900 mT-10 mB-30">Пользователи</h4>
                <a href="{{route('cp.users.create', app()->getLocale())}}" class="btn cur-p btn-primary">Добавить пользователя</a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="ta-c">Аватор</th>
                                <th class="ta-c">Имя</th>
                                <th class="ta-c">Почта</th>
                                <th class="ta-c">Кол-во публикаций</th>
                                <th class="ta-c">Дата регистрации</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th class="ta-c">Аватор</th>
                                <th class="ta-c">Имя</th>
                                <th class="ta-c">Почта</th>
                                <th class="ta-c">Кол-во публикаций</th>
                                <th class="ta-c">Дата регистрации</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="ta-c">
                                        <img src="{{$user->avatar_path}}" class="bdrs-50p" alt="" style="height: 64px; width: 64px;">
                                    </td>
                                    <td class="ta-c">{{$user->name}}</td>
                                    <td class="ta-c">{{$user->email}}</td>
                                    <td class="ta-c">{{$user->articles->count()}}</td>
                                    <td class="ta-c">{{$user->created_at->format("d-m-Y h:i")}}</td>
                                    <td class="ta-r">
                                        <a href="{{route('cp.users.edit', ['user'=>$user->id, 'locale'=> app()->getLocale()])}}"
                                           class="btn btn-sm cur-p btn-primary">Изменить</a>
                                        {!! Form::open(['route' => ['cp.users.destroy', ['user'=>$user->id, 'locale'=> app()->getLocale()]], 'method' => 'delete', 'style'=>'display: inline-block;']) !!}
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
