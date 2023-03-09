@extends('layouts.app')
@section('title','Admin Add Blog')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Partners</h3>
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
                        <h2>adding partner<small>fill in the form</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="/admin/partner/{{$partner->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Partner Names</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" id="partner_name" name="partner_name" value="{{ $partner->partner_name }}" required placeholder="enter partner names">
                                    @error('partner_name') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="control-group row">
                                <label class="control-label col-md-3 col-sm-3 " for="image" value="{{ $partner->image }}">image</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                    @error('image') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="button" class="btn btn-primary">Cancel</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
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