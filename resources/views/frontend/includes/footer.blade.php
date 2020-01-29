<!-- Footer -->
<footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <img class="mt-10 mb-20" alt="{{ GeneralSiteSettings('site_title')}}" src="{{asset('uploads/settings/')}}/{{ GeneralSiteSettings('site_logo')}}">
                    <p>{{ GeneralSiteSettings('site_address')}}</p>

                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-mobile text-theme-colored mr-5"></i> <a
                                class="text-gray" href="tel:{{ GeneralSiteSettings('site_mobile')}}">{{ GeneralSiteSettings('site_mobile')}}</a> </li>
<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray"
        href="tel:{{ GeneralSiteSettings('site_phone')}}">{{ GeneralSiteSettings('site_phone')}}</a> </li>



                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                class="text-gray" href="mailto:">{{ GeneralSiteSettings('site_email')}}</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a
                                class="text-gray" href="{{ GeneralSiteSettings('site_url')}}">{{ GeneralSiteSettings('site_url')}}</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Latest News</h5>
                    <div class="latest-posts">
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Useful Links</h5>
                    <ul class="list angle-double-right list-border">
                        <li><a href="#">Body Building</a></li>
                        <li><a href="#">Fitness Classes</a></li>
                        <li><a href="#">Weight lifting</a></li>
                        <li><a href="#">Yoga Courses</a></li>
                        <li><a href="#">Training</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Opening Hours</h5>
                    <div class="opening-hours">
                        <ul class="list-border">
                            <li class="clearfix"> <span> Mon - Tues : </span>
                                <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Wednes - Thurs :</span>
                                <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Fri : </span>
                                <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Sun : </span>
                                <div class="value pull-right"> Colosed </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-5">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">Subscribe Us</h5>
                    <!-- Mailchimp Subscription Form Starts Here -->
                    <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                        <div class="input-group">
                            <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer"
                                style="height: 45px;">
                            <span class="input-group-btn">
                                <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14"
                                    type="submit">Subscribe</button>
                            </span>
                        </div>
                    </form>
                    <!-- Mailchimp Subscription Form Validation-->
                    <script type="text/javascript">
                        $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  console.log(resp);
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
                    </script>
                    <!-- Mailchimp Subscription Form Ends Here -->
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">Call Us Now</h5>
                    <div class="text-gray">
                        {{ GeneralSiteSettings('site_mobile')}} <br>
                    {{ GeneralSiteSettings('site_phone')}}<br>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">Connect With Us</h5>
                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="{{ GeneralSiteSettings('site_facebook_url')}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ GeneralSiteSettings('site_twitter_url')}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ GeneralSiteSettings('site_whatsapp_url')}}"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="{{ GeneralSiteSettings('site_youtube_url')}}"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="{{ GeneralSiteSettings('site_instagram_url')}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ GeneralSiteSettings('site_linkedin_url')}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black-333">
        <div class="container pt-15 pb-10">
            <div class="row">
                <div class="col-md-6">
                    <p class="font-11 text-black-777 m-0">{{ GeneralSiteSettings('copy_right')}}</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-12">
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Help Desk</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('frontend/js/custom.js')}}"></script>



<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
