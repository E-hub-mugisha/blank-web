@extends('layouts.app')
@section('title','Admin Faq')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Admin, <small>faq</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>faq</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <p>faq</p>

                        <!-- start project list -->
                        <table class="table table-striped table-responsive projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 20%">Questions</th>
                                    <th>Answers</th>
                                    <th>Created at</th>
                                    <th style="width: 20%">#Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $faqs as $faq)
                                <tr>
                                    <td>{{ $faq->id }}</td>
                                    <td>
                                        <a>{{ $faq->question }}</a>
                                    </td>
                                    <td class="project_progress">
                                        {{ $faq->answer }}
                                    </td>
                                    <td>{{ $faq->created_at }}</td>
                                    <td>
                                        <a href="/admin/faq-single/{{ $faq->id}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> </a>
                                        <a href="/admin/faq/{{$faq->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                        <form action="/admin/faq/{{$faq->id}}" method="post" class="d-inline">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button onclick="confirm('are you sure, you want to delete this!') || event.stopImmediatePropagation()" class="btn btn-xs btn-danger" type="submit" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection