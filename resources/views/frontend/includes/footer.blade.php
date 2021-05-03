


<!-- Footer -->
<footer id="footer" class="footer" data-bg-img="{{asset('frontend/images/footer-bg.png')}}" data-bg-color="#25272e">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-12 col-md-12">
                <div  style="text-align: center;" class="widget">
                    <img width="300" height="150" class="mt-10 mb-20" alt="{{ GeneralSiteSettings('site_title')}}" src="{{asset('uploads/settings/')}}/w_trans_{{ app()->getLocale()}}.png">
                <p>{{ GeneralSiteSettings('site_meta_description') }}</p>
                 <p>{{ GeneralSiteSettings('site_address')}}</p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-mobile text-theme-colored mr-5"></i> <a style="direction:ltr;float: left;"
                                class="text-gray" href="tel:{{ GeneralSiteSettings('site_mobile')}}">{{ GeneralSiteSettings('site_mobile')}}</a> </li>
                       <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a  style="direction:ltr;float: left;" class="text-gray"
                        href="tel:{{ GeneralSiteSettings('site_phone')}}">{{ GeneralSiteSettings('site_phone')}}</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                class="text-gray" href="mailto:">{{ GeneralSiteSettings('site_email')}}</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a
                                class="text-gray" href="{{ GeneralSiteSettings('site_url')}}">{{ GeneralSiteSettings('site_url')}}</a> </li>
                    </ul>
                </div>
            </div>



        </div>
        <div class="row mt-10">
            <div class="col-md-5">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">{{ trans('frontend.subscribe') }}</h5>
                    <!-- Mailchimp Subscription Form Starts Here -->
                    <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                        <div class="input-group">
                        <input type="email" value="" name="EMAIL" placeholder="{{trans('frontend.your_mail')}}"
                                class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer"
                                style="height: 45px;">
                            <span class="input-group-btn">
                                <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14"
                                    type="submit">{{ trans('frontend.subscribe') }}</button>
                            </span>
                        </div>
                    </form>
                    <!-- Mailchimp Subscription Form Validation-->
                    <script type="text/javascript">
                        $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: 'https://gmail.us19.list-manage.com/subscribe/post?u=dc814106b01e1d0194b4a77b0&amp;id=eb8d5c5202'
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
                    <h5 class="widget-title mb-10"> </h5>
                    <div class="text-gray">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">{{ trans('frontend.connect_with_us') }}</h5>
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

<div style="text-align: center;" class="col-md-4">

    <ul class="list-inline sm-text-center mt-5 font-12">
        <li>
            <a href="{{URL('/terms-of-use')}}">{{ trans('frontend.terms_of_use') }}</a>
        </li>
        <li>|</li>
        <li>
            <a href="{{URL('/privacy-policy')}}">{{ trans('frontend.privacy_policy') }}</a>
        </li>
    </ul>

</div>
                <div style="text-align: center;"   class="col-md-4">
                    <h5 class="text-black-777 m-0 text-white">{{ GeneralSiteSettings('copy_right')}}</h5>
                </div>

    <div style="text-align: center;" class="col-md-4">
 {{ trans('frontend.Developedby:') }}
    <a  href="https://www.kodatik.com" target="_blank"  title="Eng: Abdulsalam ALROAS | +90 536 771 1855" ><img style="width:80px;height:20px;text-align: center;"  src="https://www.kodatik.com/images/logo.png" alt="kodatik.com<" data-no-retina="dsa">
     </a>
        </div>




            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
 
