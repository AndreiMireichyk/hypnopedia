@extends('cpanel.layouts.layout')


@section('content')
    <div id="mainContent">
        <div class="container-fluid">
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
                                <th>Заголовок</th>
                                <th>Автор</th>
                                <th>Дата публикации</th>
                                <th>Активна</th>
                                <th>Просмотры</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Заголовок</th>
                                <th>Автор</th>
                                <th>Дата публикации</th>
                                <th>Активна</th>
                                <th>Просмотры</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25 asd</td>
                                <td class="ta-r">
                                    <a href="" class="btn btn-sm cur-p btn-primary">Изменить</a>
                                    <a href="" class="btn btn-sm cur-p btn-danger">Удалить</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
