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
                <h4 class="c-grey-900 mT-10 mB-30">Популярные статьи</h4>
            </div>

            <div class="mB-30">
                {!! Form::open(['route' => 'cp.populars.store', 'method' => 'post', 'class'=>'d-f jc-sb ai-c']) !!}
                <div class="fxg-1 pR-15">
                    {!! Form::select('article_id',$articles, old('article_id'), ['class' => 'js-select-tags', 'id'=>'article_id']); !!}
                    @include('cpanel.layouts.form_errors', ['errors'=>$errors->get('article_id')])
                </div>
                <button type="submit" class="btn cur-p btn-primary">
                    Добавить в популярное
                </button>
                {!! Form::close() !!}
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="ta-c">Название</th>
                                <th class="ta-c">Тэги</th>
                                <th class="ta-c">Просмотры</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th class="ta-c">Название</th>
                                <th class="ta-c">Тэги</th>
                                <th class="ta-c">Просмотры</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($populars as $popular)
                                <tr>
                                    <td class="ta-c"><a
                                            href="{{route('blog.article', $popular->article->slug)}}">{{$popular->article->title}}</a>
                                    </td>
                                    <td class="ta-c">{{$popular->article->categories->implode('title', ', ')}}</td>
                                    <td  class="ta-c">0</td>
                                    <td class="ta-r">
                                        {!! Form::open(['route' => ['cp.populars.destroy', $popular->id], 'method' => 'delete', 'style'=>'display: inline-block;']) !!}
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
