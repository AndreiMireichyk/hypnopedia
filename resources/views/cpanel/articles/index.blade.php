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
                <h4 class="c-grey-900 mT-10 mB-30">Статьи</h4>
                <a href="{{route('cp.articles.create')}}" class="btn cur-p btn-primary">Добавить статью</a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="ta-c">ID</th>
                                <th class="ta-c"  data-sort="desc">Обложка</th>
                                <th>Заголовок</th>
                                <th  class="ta-c">Тэги</th>
                                <th class="ta-c">Автор</th>
                                <th class="ta-c">Активна</th>
                                <th class="ta-c">Просмотры</th>
                                <th class="ta-c">Дата публикации</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th class="ta-c">ID</th>
                                <th class="ta-c">Обложка</th>
                                <th>Заголовок</th>
                                <th  class="ta-c">Тэги</th>
                                <th class="ta-c">Автор</th>
                                <th class="ta-c">Активна</th>
                                <th class="ta-c">Просмотры</th>
                                <th class="ta-c whs-nw">Дата публикации</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td class="ta-c">
                                        {{$article->id}}
                                    </td>
                                    <td class="ta-c">
                                        <img src="{{$article->cover_path}}" alt="" style="height: 64px; width: auto;">
                                    </td>
                                    <td><a href="{{route('blog.article', $article->slug)}}">{{$article->title}}</a></td>
                                    <td  class="ta-c">{{$article->categories->implode('title', ', ')}}</td>
                                    <td class="ta-c">{{$article->user->name}}</td>
                                    <td class="ta-c">{{$article->is_active ? 'Да' : 'Нет'}}</td>
                                    <td class="ta-c">0</td>
                                    <td class="ta-c" data-order="{{$article->id}}">{{$article->created_at->format("d-m-Y H:i")}}</td>
                                    <td class="ta-r whs-nw">
                                        <a href="{{route('cp.articles.edit', $article->id)}}"
                                           class="btn btn-sm cur-p btn-primary">Изменить</a>
                                        {!! Form::open(['route' => ['cp.articles.destroy', $article->id], 'method' => 'delete', 'style'=>'display: inline-block;']) !!}
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
