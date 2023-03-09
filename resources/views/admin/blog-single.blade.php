@extends('layouts.app')
@section('title','Admin Blog single')
@section('content')

<!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Blog Single</h3>
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
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ $blog->title }}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/admin/blog/{{$blog->id}}/edit">Edit</a>
                                    <form action="/admin/blog/{{$blog->id}}" method="post" class="d-inline">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="confirm('are you sure, you want to delete this!') || event.stopImmediatePropagation()">Delete</button>
                                    </form>
                                </div>
                            </li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-7 col-sm-7 ">
                            <div class="product-image">
                                <img src="/assets/img/blog/{{$blog->image}}" alt="..." />
                            </div>
                            <!-- <div class="product_gallery">
                                <a>
                                    <img src="../images/prod-2.jpg" alt="..." />
                                </a>
                                <a>
                                    <img src="../images/prod-3.jpg" alt="..." />
                                </a>
                                <a>
                                    <img src="../images/prod-4.jpg" alt="..." />
                                </a>
                                <a>
                                    <img src="../images/prod-5.jpg" alt="..." />
                                </a>
                            </div> -->
                        </div>

                        <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                            <h3 class="prod_title">{{ $blog->title }}</h3>

                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                            <br />
                            <br />

                            <div class="">
                                <h2>Blog <small>Category</small></h2>
                                <ul class="list-inline prod_size display-layout">
                                    <li>
                                        <button type="button" class="btn btn-default btn-xs">{{ $blog->blog_category }}</button>
                                    </li>
                                </ul>
                            </div>
                            <br />
                            <div class="">
                                <h2>Blog <small>Tags</small></h2>
                                <ul class="list-inline prod_size display-layout">
                                    <li>
                                        <button type="button" class="btn btn-default btn-xs">{{ $blog->blog_tags }}</button>
                                    </li>
                                </ul>
                            </div>
                            <br />

                        </div>

                        <div class="col-md-12">
                            <div class="tab-content" id="myTabContent">
                                {!! $blog->content !!}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection