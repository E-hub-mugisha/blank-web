<!-- Star Clients Area
    ============================================= -->
<div class="clients-area default-padding-bottom">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-12">
                <div class="partner-carousel justify-items-center owl-carousel owl-theme">
                    @foreach( $partners as $partner)
                    <img src="../assets/img/partners/{{ $partner->image }}" alt="{{ $partner->partner_name }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Clients Area -->