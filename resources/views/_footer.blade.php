<!--====== FOOTER PART START ======-->

<footer id="footer" class="relative z-10 footer-area pt-120">
    <div class="footer-bg" style="background-image: url(assets/images/footer-bg.jpg);"></div>
    <div class="container" id="contact">
        <div class="row justify-end">
            <div class="w-full lg:w-1/1">
                <div class="contact_wrapper mt-11">
                    <div class="relative max-w-4xl">
                        <div
                            class="absolute z-10 inset-0 gradient-btn opacity-80 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                        </div>
                        <div class="relative z-20 bg-white md:flex justify-between p-6 shadow-lg rounded-lg w-full max-w-4xl">
                            <div class="sm:flex flex-col justify-between space-y-6 md:pr-10">
                                <div class="">
                                    <h2 class="pt-1 text-3xl font-bold text-gray-800">Get In Touch</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact_form" id="contact-form" >
                            @csrf
                            <div class="row">
                                <div class="w-full md:w-1/2">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <input name="name" id="name" type="text" placeholder="Name" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" >
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <input name="email" id="email" type="email" placeholder="Email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <textarea name="message" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                                <p class="form-message mx-3"></p>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <button onclick="sendMail();clearInput()"
                                                    class="gradient-btn contact-btn">Send</button>
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                            </div> <!-- row -->
                    </div> <!-- contact form -->
                </div> <!-- contact wrapper -->
            </div>
        </div> <!-- row -->
        <div class="footer-widget pb-10">
            <div class="row">
                <div class="w-4/5 md:w-3/5 lg:w-2/6">
                    <div class="mt-12 footer-about wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a class="inline-block mb-8 logo" href="index.html">
                            <img src="assets/images/logo.png" alt="logo" class="w-40">
                        </a>
                        <p class="pb-10 pr-10 leading-snug text-white">To a happy future through the bridges of education</p>
                        <ul class="flex footer-social">
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6">
                    <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">

                        <ul class="link">
                            <li><a href="tel: +48226022723">+48 226-02-27-23</a></li>
                            <li><a href="tel: +48503358080">+48 503-35-80-80</a></li>
                            <li><a href="mailto:a.osmonov@skybridges.eu">a.osmonov@skybridges.eu</a></li>
                        </ul>
                    </div> <!-- footer contact -->
                </div>
                <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6">
                    <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <ul class="link">
                            <li><a href="https://skybridges.eu">www.skybridges.eu</a></li>
                            <li><a href="https://www.google.com/maps/search/Poland,+Warsaw,+st.+Stowicza+53,+02-170/@52.1888069,20.9579966,16z/data=!3m1!4b1">Poland, Warsaw,<br> st. Stowicza 53, 02-170</a></li>
                        </ul>
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->

    </div> <!-- container -->
    <div id="particles-2" class="particles"></div>
</footer>
<div id="flash-message" class="hidden fixed bg-blue-600 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm mr-24 z-50">
    <p class="text-white">Message has been sent</p>
</div>
<!--====== FOOTER PART ENDS ======-->

<x-to-top/>






<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-3.5.1-min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Plugins js ======-->
<script src="assets/js/plugins.js"></script>

<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>

<!--====== Scrolling Nav js ======-->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<!--====== Tiny Slider js ======-->
<script src="assets/js/tiny-slider.js"></script>

<!--====== wow js ======-->
<script src="assets/js/wow.min.js"></script>

<!--====== Particles js ======-->
<script src="assets/js/particles.min.js"></script>


<!--====== Main js ======-->
<script src="assets/js/main.js"></script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
    (function() {
        emailjs.init("user_DCbQmuZQii4UK0njEeRZj");
    })();
</script>
