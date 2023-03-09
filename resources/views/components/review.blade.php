<style>
    .title-box {
        margin: 30px;
    }

    .title-box span {
        color: #ff1e00;
    }

    .item i {
        color: #ff1e00;
    }
</style>
<!-- Star Brand Area
    ============================================= -->
<div class="brand-area text-light">
    <div class="container">
        <div class="brand-items">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <h2>What people say about us</h2>
                    <p>
                        Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor. Him had wound use found hoped.
                    </p>
                    <a href="#" type="button" class="btn-animation light border" data-toggle="modal" data-target="#exampleModal">Leave a Review<i class="arrow_right"></i></a>
                </div>
                <div class="col-lg-6 brand">
                    <div class="row">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            @foreach( $testimonials as $testimonial)
                            <div class="item">
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: 48;"></i>
                                <p class="mb-2">
                                    {!! $testimonial->review !!}
                                </p>
                                <div class="title-box">
                                    <h5 class="mb-8">{{ $testimonial->names }}</h5>
                                    <span class="mb-2">{{ $testimonial->title }}</span>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('createReview')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                @csrf
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Names</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" id="names" name="names" required placeholder="enter your names">
                            @error('names') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Title </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" id="title" name="title" placeholder="position title">
                            @error('title') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Your Review </label>
                        <div class="col-md-9 col-sm-9 ">
                            <textarea id="summernote" class="form-control summernote" name="review" required></textarea>
                            @error('review') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn-animation dark border">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Brand Area -->