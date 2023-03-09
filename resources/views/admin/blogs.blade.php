@extends('layouts.app')
@section('title','Admin Blog')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Media Gallery <small> gallery design</small> </h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
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
                        <h2>Media Gallery <small> gallery design </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            @foreach($blogs as $blog)
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="../assets/img/blog/{{ $blog->image}}" alt="image" />
                                        <div class="mask">
                                            <p>{{ $blog->created_at }}</p>
                                            <div class="tools tools-bottom">
                                                <a href="/admin/blog/{{$blog->id}}/edit"><i class="fa fa-pencil"></i></a>
                                                <form action="/admin/blog/{{$blog->id}}" method="post" class="d-inline">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                    <a type="submit" onclick="confirm('are you sure, you want to delete this!') || event.stopImmediatePropagation()"><i class="fa fa-times"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <a href="/admin/blog-single/{{ $blog->slug}}">{{Str::limit($blog->title,30) }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection