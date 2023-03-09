<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/banner/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>@yield('title')</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home" style="color: #ff1e00;"></i> Home</a></li>
                    <li class="active">@yield('title')</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->