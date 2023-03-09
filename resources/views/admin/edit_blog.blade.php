@extends('layouts.app')
@section('title','Admin Add Blog')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Blog</h3>
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
                        <h2>Updating blog content<small>fill in the form</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="/admin/blog/{{$blog->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Blog title</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required placeholder="enter blog title">
                                    @error('title') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Blog slug </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $blog->slug }}" placeholder="blog slug">
                                    @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 ">Select</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <select class="form-control">
                                            <option>Choose option</option>
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div> -->
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Select Category</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <select class="select2_single form-control" id="blog_category" name="blog_category" value="{{ $blog->blog_category }}" required tabindex="-1">
                                        <option></option>
                                        <option value="branding">Branding</option>
                                        <option value="design">Design</option>
                                        <option value="content_creation">Content Creation</option>
                                        <option value="web">Web</option>
                                        <option value="socialmedia">social media</option>
                                    </select>
                                    @error('blog_category')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="control-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Input Tags</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input id="blog_tags" name="blog_tags" required type="text" class="tags form-control" value="{{ $blog->blog_tags }}" />
                                    <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                </div>
                            </div>
                            <div class="control-group row">
                                <label class="control-label col-md-3 col-sm-3 " for="image" value="{{ $blog->image }}">image</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                    @error('image') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div><!-- End .form-group -->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Short description</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <textarea class="form-control" id="short_description" name="short_description" rows="3"></textarea>
                                    @error('short-description') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Enter Body Content</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <textarea id="summernote" class="summernote" name="content" required>{{ $blog->content }}</textarea>
                                    @error('content') <p class="text-danger">{{$message}}</p>@enderror
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