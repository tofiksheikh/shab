<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Experts Platform - A Learning Institute</title>

   <!-- website icon -->
   <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"> -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css.map') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css.map') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
   <!-- slick slider styles -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">

   <!-- Your custom styles -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

</head>


<body>
   <!-- ================  Header start here ================= -->
   <div class="full-width-header">
      <header class="rs-header" id="rs-header">
         <div class="menu-area menu-sticky">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <nav class="navbar navbar-expand-md">
                        <!-- Brand -->
                        <a class="navbar-brand" href="index.html">
                           <img src="{{ asset('frontend/assets/img/logo_main.svg') }}" alt="Experts Platform - A Learning Institute">
                        </a>
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#collapsibleNavbar">
                           <span class="toggler-icon"></span>
                           <span class="toggler-icon"></span>
                           <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                           <ul class="navbar-nav first_nav">
                              <li class="nav-item">
                                 <a class="nav-link" href="javascript:;">Find Tutors</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="javascript:;">Become a tutor</a>
                              </li>
                           </ul>
                           <ul class="navbar-nav justify-content-end last_nav">

@if(Auth::guard('tutor')->check())
Hello {{Auth::guard('tutor')->user()->first_name}}
<li class="nav-item">
      <a class="nav-link contact_link" href="javascript:;">Logout</a>
</li>
@elseif(Auth::guard('student')->check())
Hello {{Auth::guard('student')->user()->first_name}}
<li class="nav-item">
      <a class="nav-link contact_link" href="javascript:;">Logout</a>
</li>
@else
   <li class="nav-item">
   <a class="nav-link contact_link" href="javascript:;">Login</a>
   </li>
@endif


                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </div>

   <!-- ================= Header end here =================== -->

   <!-- =============== main banner section start here =============== -->
   <section class="home_banner_section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="home_banner_wrapper">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="home_banner_content">
                           <h1>Create and Launch a World Class Training System</h1>
                           <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                           <a href="javascript:;" class="btn common_btn_link">Get Started</a>

                           <div class="row">
                              <div class="col-lg-3 col-md-3 col-xs-6">
                                 <div class="count-up">
                                    <h3><span class="counter-count">332</span> <span>+</span></h3>
                                    <p>Courses</p>
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-xs-6">
                                 <div class="count-up">
                                    <h3><span class="counter-count">1403</span> <span>+</span></h3>
                                    <p>Members</p>
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-xs-6">
                                 <div class="count-up">
                                    <h3><span class="counter-count">600</span> <span>+</span></h3>
                                    <p>Authors</p>
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-xs-6">
                                 <div class="count-up">
                                    <h3><span class="counter-count">120</span> <span>+</span></h3>
                                    <p>Subjects</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-5">
                        <div class="home_banner_img">
                           <img src="{{ asset('frontend/assets/img/1.png') }}" alt="Home Banner Image">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =============== main banner section end here ================= -->
   <!-- =============== courses section start here ================= -->
   <section class="courses_section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-5">
               <div class="courses_content_left">
                  <h3>Courses</h3>
                  <h2>Learn Best Things</h2>
                  <p>Rhd elementum vehicula odio at lacinia. Nam finibusis.Vestibulum eget ex at risus feugiat
                     consequat. Morbi vitae lorem id elit vehicula mollis sit amet ut nisl. Quisque tincidunt id mi quis
                     imperdiet.Ut sed tortor vestibulum, volutpat diam sit amet, venenatis odio. Inus Phasellus arcu
                     enim, pellentesque posuere risus nec, pulvinar commodo felis.</p>
                     <br>
                     <br>
                     <br>
                  <a href="javascript:;" class="btn common_btn_link">View All Courses</a>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="courses_slider_wrapper">
                  <div class="slider courses_slider">
                     <!-- slide 1 -->
                     <div>
                        <a href="javascript:void(0);">
                           <div class="courses_slide">
                              <img src="{{ asset('frontend/assets/img/4.png') }}" alt="Courses Image">
                              <h6>Spanish Basic</h6>
                              <p>Blandit accumsan ei Vis, maiorum epicurei
                                 at mei nibh viderer ius pri te fabulas
                                 molestiae necess</p>
                           </div>
                        </a>
                     </div>
                     <!-- slide 2 -->
                     <div>
                        <a href="javascript:void(0);">
                           <div class="courses_slide">
                              <img src="{{ asset('frontend/assets/img/5.png') }}" alt="Courses Image">
                              <h6>Creative Writing</h6>
                              <p>Blandit accumsan ei Vis, maiorum epicurei
                                 at mei nibh viderer ius pri te fabulas
                                 molestiae necess</p>
                           </div>
                        </a>
                     </div>
                     <!-- slide 3 -->
                     <div>
                        <a href="javascript:void(0);">
                           <div class="courses_slide">
                              <img src="{{ asset('frontend/assets/img/5.png') }}" alt="Courses Image">
                              <h6>Spanish Basic</h6>
                              <p>Blandit accumsan ei Vis, maiorum epicurei
                                 at mei nibh viderer ius pri te fabulas
                                 molestiae necess</p>
                           </div>
                        </a>
                     </div>
                     <!-- slide 3 end -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =============== courses section section end here ================= -->

   <!-- =============== home about us section start here ================= -->
   <section class="home_aboutus_section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="home_aboutus_wrapper">
                  <h3>About Us</h3>
                  <h2>Professional And Highly <br> Qualified Tutors</h2>

                  <div class="accordion" id="accordionExample">
                     <!-- card 1 -->
                     <div class="card">
                        <div class="card-header" id="headingOne">
                           <button class="btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              How to select appropriate course?
                              <span class="toggle_sign">+</span>
                           </button>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                           data-parent="#accordionExample">
                           <div class="card-body">
                              <p>Rhd elementum vehicula odio at lacinia. Nam finibusis.Vestibulum eget ex at risus feugiat consequat. Morbi vitae lorem id elit vehicula mollis sit amet ut nisl. Quisque tincidunt id mi quis imperdiet.Ut sed tortor vestibulum, volutpat diam sit amet, venenatis odio. Inus Phasellus arcu enim, pellentesque posuere risus nec, pulvinar commodo felis.</p>
                           </div>
                        </div>
                     </div>
                     <!-- card 2 -->
                     <div class="card">
                        <div class="card-header" id="headingTwo">
                           <button class="btn text-left collapsed" type="button" data-toggle="collapse"
                              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              What is the eligibility to do online course?
                              <span class="toggle_sign">+</span>
                           </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                           data-parent="#accordionExample">
                           <div class="card-body">
                              <p>Rhd elementum vehicula odio at lacinia. Nam finibusis.Vestibulum eget ex at risus feugiat consequat. Morbi vitae lorem id elit vehicula mollis sit amet ut nisl. Quisque tincidunt id mi quis imperdiet.Ut sed tortor vestibulum, volutpat diam sit amet, venenatis odio. Inus Phasellus arcu enim, pellentesque posuere risus nec, pulvinar commodo felis.</p>
                           </div>
                        </div>
                     </div>
                     <!-- card 3 -->
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <button class="btn text-left collapsed" type="button" data-toggle="collapse"
                              data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Can a school student join online class?
                              <span class="toggle_sign">+</span>
                           </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                           data-parent="#accordionExample">
                           <div class="card-body">
                              <p>Rhd elementum vehicula odio at lacinia. Nam finibusis.Vestibulum eget ex at risus feugiat consequat. Morbi vitae lorem id elit vehicula mollis sit amet ut nisl. Quisque tincidunt id mi quis imperdiet.Ut sed tortor vestibulum, volutpat diam sit amet, venenatis odio. Inus Phasellus arcu enim, pellentesque posuere risus nec, pulvinar commodo felis.</p>
                           </div>
                        </div>
                     </div>
                     <!-- card 4 -->
                     <div class="card">
                        <div class="card-header" id="headingFour">
                           <button class="btn text-left collapsed" type="button" data-toggle="collapse"
                              data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              How to make online payment?
                              <span class="toggle_sign">+</span>
                           </button>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                           data-parent="#accordionExample">
                           <div class="card-body">
                              <p>Rhd elementum vehicula odio at lacinia. Nam finibusis.Vestibulum eget ex at risus feugiat consequat. Morbi vitae lorem id elit vehicula mollis sit amet ut nisl. Quisque tincidunt id mi quis imperdiet.Ut sed tortor vestibulum, volutpat diam sit amet, venenatis odio. Inus Phasellus arcu enim, pellentesque posuere risus nec, pulvinar commodo felis.</p>
                           </div>
                        </div>
                     </div>
                     <!-- card 4 end -->
                  </div>
               </div>
            </div>

            <div class="col-lg-6">
               <div class="home_aboutus_img">
                  <img src="{{ asset('frontend/assets/img/6.png') }}" alt="about us image">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =============== home about us section end here ================= -->

   <!-- =============== our process section start here ================= -->
   <section class="our_process_section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="our_process_head">
                  <h3>Our Process</h3>
                  <h2>Learn online with the world's best tutors</h2>
               </div>
               <div class="our_process_body">
                  <img src="{{ asset('frontend/assets/img/7.png') }}" alt="our process Image">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =============== our process section end here ================= -->
   <!-- =============== Expert Tutors section start here ================= -->
   <section class="expert_tutors_section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="ext_section_img">
                  <img src="{{ asset('frontend/assets/img/8.png') }}" alt="Tutor">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="ext_section_content">
                  <div class="ext_section_content_head">
                     <h3>Tutor with Expert Platform</h3>
                     <h2>Benefits of being an Instructor</h2>
                  </div>
                  <div class="ext_section_content_body">
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#tab1">Join Ecenter</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab2">Instructor Rules</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab3">Start with Courses</a>
                        </li>
                     </ul>
                     <!-- Nav tabs end -->
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <!-- tab pane 1 -->
                        <div class="tab-pane active" id="tab1">
                           <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence.</p>
                           <ul>
                              <li>You're constantly settling for less than what you deserve.</li>
                              <li>You have big dreams but lack of contains don't let you make come true?</li>
                              <li>You need motivation and mentorship to reach goals.</li>
                              <li>Synergistically expedite manufactured products bleeding leadership.</li>
                           </ul>
                           <br>
                           <a href="javascript:;" class="btn common_btn_link">Apply Now</a>
                        </div>
                        <!-- tab pane 2 -->
                        <div class="tab-pane fade" id="tab2">
                           <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence.</p>
                           <ul>
                              <li>You're constantly settling for less than what you deserve.</li>
                              <li>You have big dreams but lack of contains don't let you make come true?</li>
                              <li>You need motivation and mentorship to reach goals.</li>
                              <li>Synergistically expedite manufactured products bleeding leadership.</li>
                           </ul>
                           <br>
                           <a href="javascript:;" class="btn common_btn_link">Apply Now</a>
                        </div>
                        <!-- tab pane 3 -->
                        <div class="tab-pane fade" id="tab3">
                           <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence.</p>
                           <ul>
                              <li>You're constantly settling for less than what you deserve.</li>
                              <li>You have big dreams but lack of contains don't let you make come true?</li>
                              <li>You need motivation and mentorship to reach goals.</li>
                              <li>Synergistically expedite manufactured products bleeding leadership.</li>
                           </ul>
                           <br>
                           <a href="javascript:;" class="btn common_btn_link">Apply Now</a>
                        </div>
                        <!-- tab pane 3 end -->
                     </div>
                     <!-- Tab panes end -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =============== Expert Tutors  section section end here ================= -->

   <!-- =============== student testimonial section start here ================= -->
   <section class="student_testimonial">
      <div class="container-fluid">

         <div class="row">
            <div class="col-lg-12">
               <div class="testimonial_head">
                  <h3>Testimonial</h3>
                  <h2>What Our Student Says</h2>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-lg-12">
               <div class="student_testimonial_wrapper">
                  <div class="slider testimonial_slider">
                     <!-- slide 1 -->
                     <div>
                        <div class="testimonial_slide">
                           <div class="testimonial_thumbnail">
                              <div class="author_img">
                                 <img src="assets/img/9.png" alt="">
                              </div>
                              <div class="author_info">
                                 <h6>Valerie J. Creasman</h6>
                                 <p>Executive Chairman @ Facebook</p>
                              </div>
                           </div>
                           <div class="testimonial_desc">
                              <p>People says about, vulputate at sapien sit amet, auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                           </div>
                        </div>
                     </div>
                     <!-- slide 2 -->
                     <div>
                        <div class="testimonial_slide">
                           <div class="testimonial_thumbnail">
                              <div class="author_img">
                                 <img src="assets/img/10.png" alt="">
                              </div>
                              <div class="author_info">
                                 <h6>Pearl B. Hill</h6>
                                 <p>Executive Chairman @ Facebook</p>
                              </div>
                           </div>
                           <div class="testimonial_desc">
                              <p>People says about, vulputate at sapien sit amet, auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                           </div>
                        </div>
                     </div>
                     <!-- slide 3 -->
                     <div>
                        <div class="testimonial_slide">
                           <div class="testimonial_thumbnail">
                              <div class="author_img">
                                 <img src="assets/img/11.png" alt="">
                              </div>
                              <div class="author_info">
                                 <h6>Valerie J. Creasman</h6>
                                 <p>Executive Chairman @ Facebook</p>
                              </div>
                           </div>
                           <div class="testimonial_desc">
                              <p>People says about, vulputate at sapien sit amet, auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                           </div>
                        </div>
                     </div>
                     <!-- slide 3 end -->
                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- =============== student testimonial section end here ================= -->

   <!-- =================== Footer ========================  -->
   <footer class="footer">
      <div class="footer_inner_wrapper">
         <div class="container-fluid">
            <div class="row">
               <!-- column-1 -->
               <div class="col-lg-6 col-md-6">
                  <div class="footer-logos-wrapper">
                     <div class="ft_logo">
                        <a href="index.html">
                           <img src="{{ asset('frontend/assets/img/logo_white.svg') }}" alt="Experts Platform - A Learning Institute">
                        </a>
                     </div>
                     <p>Collaboratively administrate empowered markets via plug-and-play <br> networks. Dynamically
                        procrastinate B2C users after installed base <br> benefits. Dramatically visualize customer
                        directed convergence.</p>
                  </div>
               </div>
               <!-- column-2 -->
               <div class="col-lg-3 col-md-3 col-xs-6">
                  <div class="footer-links-wrapper">
                     <h6>Site Map</h6>
                     <ul class="list-unstyled">
                        <li>
                           <a href="javascript:;">About Us</a>
                        </li>
                        <li>
                           <a href="javascript:;">Find Tutors</a>
                        </li>
                        <li>
                           <a href="javascript:;">Become a tutor</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- column-3 -->
               <div class="col-lg-3 col-md-3 col-xs-6">
                  <div class="footer-links-wrapper">
                     <h6>Get In Touch</h6>
                     <ul class="list-unstyled">
                        <li>
                           <a href="tel:+555567812340">+555 5678 12340</a>
                        </li>
                        <li>
                           <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                        </li>
                        <li>
                           <a href="javascript:;">Become a tutor</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- column-3 end -->
            </div>

         </div>

      </div>
      <div class="copyright-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <p>Copyright © 2023 Expert Platform. All Rights Reserved</p>
               </div>
               <div class="col-lg-6">
                  <ul class="nav justify-content-end">
                     <li>
                        <a href="javascript:;">Terms of service</a>
                     </li>
                     <li>
                        <a href="javascript:;">Privacy policy</a>
                     </li>
                     <li>
                        <a href="javascript:;">Login & Register</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

   </footer>
   <!-- ======================= Footer ======================= -->


   <!-- jQuery -->
   <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
   <!-- Bootstrap tooltips -->
   <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
   <!-- Bootstrap core JavaScript -->
   <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
   <!-- slick slider javascript -->
   <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

   <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

</body>

</html>