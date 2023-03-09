@extends('layouts.app')
@section('title','Admin edit testimonial')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>edit testimonial</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
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
            <div class="col-md-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Updating testimonial content<small>fill in the form</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="/admin/testimonial/{{$testimonial->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Position title</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $testimonial->title }}" required placeholder="enter position title">
                                    @error('title') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Names </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" id="names" name="names" value="{{ $testimonial->names }}" placeholder="your names">
                                    @error('names') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Enter review</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <textarea id="summernote" class="summernote" name="review" required>{{ $testimonial->review }}</textarea>
                                    @error('review') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection