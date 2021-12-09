<x-layout>
 @include('_header')
{{--    {{__('data.test')}}--}}

    <div class="pt-24 brand-area">
        <div class="container">
            <div class="row">
                <div class="w-full">
                    <div class="items-center justify-center row lg:justify-between">
                        <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="assets/images/accenture.png" alt="brand">
                        </div>
                        <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="assets/images/atos.png" alt="brand">
                        </div>
                        <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="assets/images/kyrgyz_global.png" alt="brand">
                        </div>
                        <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="assets/images/pwc.png" alt="brand">
                        </div>
                        <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <img src="assets/images/staples.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== BRAND PART ENDS ======-->

    @include('sections.features')
    @include('sections.about')
    @include('sections.reason')
    @include('sections.mentors')
{{--    @include('sections.testimonials')--}}





    @include('_footer')
</x-layout>
