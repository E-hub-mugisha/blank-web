@extends('layouts.app')
@section('title','Admin Blog')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Inbox Design <small>Some examples to get you started</small></h3>
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
                        <h2>{{ $testimonial->names}}'s<small>testimonial</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <!-- CONTENT MAIL -->
                            <div class="col-sm-9 mail_view">
                                <div class="inbox-body">
                                    <div class="mail_heading row">
                                        <div class="col-md-8">
                                            <div class="btn-group">
                                                <a href="/admin/testimonial/{{$testimonial->id}}/edit" class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></a>
                                                <form action="/admin/testimonial/{{$testimonial->id}}" method="post" class="d-inline">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                    <button onclick="confirm('are you sure, you want to delete this!') || event.stopImmediatePropagation()" class="btn btn-sm btn-default" type="submit" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <p class="date">{{ $testimonial->created_at }}</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h4> {{ $testimonial->names}}</h4>
                                        </div>
                                    </div>
                                    <div class="view-mail">
                                        <p>
                                            {!! $testimonial->review !!}
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <!-- /CONTENT MAIL -->
                            <div class="col-sm-3 mail_list_column">
                                <button id="compose" class="btn btn-sm btn-success btn-block" type="button">Others</button>
                                @foreach( $reviews as $testimonial)
                                <a href="/admin/testimonial-single/{{ $testimonial->id}}">
                                    <div class="mail_list">
                                        <div class="left">
                                            <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                                        </div>
                                        <div class="right">
                                            <h3>{{ $testimonial->names}}'s <small>testimonial</small></h3>
                                            <p>Created on {{ $testimonial->created_at }}</p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <!-- /MAIL LIST -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection