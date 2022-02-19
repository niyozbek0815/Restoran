<!DOCTYPE html>
<html lang="en">
<head>

     <title>Eatery Cafe and Restaurant Template</title>
<!--

Eatery Cafe Template

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('dars14/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('dars14/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('dars14/css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('dars14/css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('dars14/css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('dars14/css/magnific-popup.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('dars14/css/templatemo-style.css') }}">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Eatery <span>.</span> Cafe</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">{{ __('til.menu1') }}</a></li>
                         <li><a href="#about" class="smoothScroll">{{ __('til.menu2') }}</a></li>
                         <li><a href="#team" class="smoothScroll">{{ __('til.menu3') }}</a></li>
                         <li><a href="#menu" class="smoothScroll">{{ __('til.menu4') }}</a></li>
                         <li><a href="#contact" class="smoothScroll">{{ __('til.menu5') }}</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">{{ __('til.tell') }}&nbsp;&nbsp;<i class="fa fa-phone"></i> 010 020 0340</a>

                         </li>
                         <li>
                            <select class="section-btn" id="til">

                                <option value="uz" {{ session()->get('lang')=='uz'?
                                     'selected':''}}>uz</option>
                           <option value="en" {{ session()->get('lang')=='en'?
                             'selected':''}}>en</option>
                        </select>
                         </li>



                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         @foreach ($slayd1 as $s)
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>{{ $s->title }}</h3>
                                             <h1>{{ $s->text }}</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">{{ $s->button }}</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         @endforeach


                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>{{ __('til.read') }}</h4>
                                   <h2>{{ __('til.readh3') }}</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>{{ __('til.read_p') }}</p>
                                   <p>{{ __('til.read_p2') }}</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="{{ asset('storage/dars14/about-image.jpg') }}" class="img-responsive" alt="">
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>{{ __('til.chef') }}</h2>
                              <h4>{{ __('til.chef_title') }}</h4>
                         </div>
                    </div>

                    @foreach ($chefs as $ch)

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="{{ asset('storage/dars14/'.$ch->img) }}" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>{{ $ch->title }}</h4>
                                             <ul class="social-icon">
                                                  <li><a href="{{ $ch->insag_link }}" class="fa fa-instagram"></a></li>
                                                  <li><a href="{{  $ch->watsap_link}}" class="fa fa-flickr"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>{{ $ch->name }}</h3>
                              <p>{{ $ch->unvon }}</p>
                         </div>
                    </div>
                    @endforeach





               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>{{ __('til.menus') }}</h2>
                              <h4>{{ __('til.menus_title') }}</h4>
                         </div>
                    </div>
                    @foreach ($menu as $m)
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="{{ asset('storage/dars14/'.$m->img) }}" class="image-popup" >
                                   <img src="{{ asset('storage/dars14/'.$m->img) }}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>{{ $m->name }}</h3>
                                             <p>{{ $m->tarkib }}</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>{{ $m->narx }}</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    @endforeach





               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">fd

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>{{ __('til.tess') }}</h2>
                         </div>
                    </div>

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                             @foreach ($teste as $t)
                              <div class="item">
                                   <p>{{ $t->p }}</p>
                                        <div class="tst-author">
                                             <h4>{{ $t->h4 }}</h4>
                                             <span>{{ $t->span }}</span>
                                        </div>
                              </div>

                             @endforeach



                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>{{ __('til.contact') }}</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>

                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="{{ __('til.input1') }}">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="{{ __('til.input2') }}">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="{{ __('til.input3') }}">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="{{ __('til.input4') }}"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">{{ __('til.input5') }}</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{ __('til.find') }}</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>{{ __('til.find_title') }}</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{ __('til.res') }}</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>090-080-0650 | 090-070-0430</p>
                                   <p><a href="mailto:info@company.com">info@company.com</a></p>
                                   <p>{{ __('til.re1') }}247 </p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{ __('til.Open') }}</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>{{ __('til.open1') }}</p>
                                   <div>
                                        <strong>{{ __('til.open2') }}</strong>
                                        <p>7:00 AM - 9:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>{{ __('til.open3') }}</strong>
                                        <p>11:00 AM - 10:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                              <p><br>Copyright &copy; 2018 <br>Your Company Name

                              <br><br>Design: TemplateMo</p>
                         </div>
                    </div>

               </div>
          </div>
     </footer>b


     <!-- SCRIPTS -->
     <script src="{{ asset('dars14/js/jquery.js') }}"></script>
     <script src="{{ asset('dars14/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('dars14/js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('dars14/js/wow.min.js') }}"></script>
     <script src="{{ asset('dars14/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('dars14/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('dars14/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('dars14/js/custom.js') }}"></script>
     <script>
        $(function(){
            var url="restoran";
            $('#til').change(function(){
                a=$(this).val();
                window.location.href=url+"/"+a;



            })
        })

     </script>

</body>
</html>
