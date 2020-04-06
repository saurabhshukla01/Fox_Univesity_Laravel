@extends('layout.common')
@section('main')
@section('title', 'Home')
<style>
   .hero-wrap {display:none;}
</style>
<section class="home-slider owl-carousel">
   <div class="slider-item" style="background-image:url(assets/images/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
         <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
               <h1 class="mb-4">Education Needs Complete Solution</h1>
               <p>A small river named Uttar Pradesh flows by their <br> place and supplies it with the necessary Kanpur peoples.</p>
               <p><a href="/contact" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
            </div>
         </div>
      </div>
   </div>
   <div class="slider-item" style="background-image:url(assets/images/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
         <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
               <h1 class="mb-4">University, College School Education</h1>
               <p>A small river named Uttar Pradesh flows by their <br> place and supplies it with the necessary Kanpur peoples.</p>
               <p><a href="/contact" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-services ftco-no-pb">
   <div class="container-wrap">
      <div class="row no-gutters">
         <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-teacher"></span>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Certified Teachers</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-reading"></span>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Special Education</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-books"></span>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Book &amp; Library</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-diploma"></span>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Sport Clubs</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container">
      <div class="row d-flex">
         <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url(assets/images/about.jpg); border"></div>
         </div>
         <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">What We Offer</h2>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
            <div class="row mt-5">
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                     <div class="text pl-3">
                        <h3>Safety First</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                     <div class="text pl-3">
                        <h3>Regular Classes</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                     <div class="text pl-3">
                        <h3>Certified Teachers</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                     <div class="text pl-3">
                        <h3>Sufficient Classrooms</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                     <div class="text pl-3">
                        <h3>Creative Lessons</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                     <div class="text pl-3">
                        <h3>Sports Facilities</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2 d-flex">
         <div class="col-md-6 align-items-stretch d-flex">
            <div class="img img-video d-flex align-items-center" style="background-image: url(assets/images/about-2.jpg);">
               <div class="video justify-content-center">
                  <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                  <span class="ion-ios-play"></span>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Chhatrapati Shahu Ji Maharaj University</h2>
            <p>
                Chhatrapati Shahu Ji Maharaj University stands as a hallmark of higher education. It is an educational
                community where students of various religions and cultural backgrounds study and work together in a congenial atmosphere.
                The university is geared to provide maximum scholastic benefit to each individual student.
            </p>
         </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
         <div class="col-lg-12">
            <div class="row d-md-flex align-items-center">
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="{{ count($teachers) }}">0</strong>
                        <span>Certified Teachers</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="401">0</strong>
                        <span>Students</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="{{ count($courses) }}">0</strong>
                        <span>Courses</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="50">0</strong>
                        <span>Awards Won</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="{{ count($blogs) }}">0</strong>
                        <span>Blogs</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section">
   <div class="container-fluid px-4">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Courses</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
         </div>
      </div>
      <div class="row">
      <?php
      $i =0;
      ?>
      @foreach ($courses as $course)
         <div class="col-md-3 course ftco-animate">
            <div class="img" style="background-image: url(storage/{{ $course->course_image }});"></div>
            <div class="text pt-4">
               <p class="meta d-flex">
                  <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                  <span><i class="icon-table mr-2"></i>{{ $course->course_seat }} seats</span>
                  <span><i class="icon-calendar mr-2"></i>{{ $course->course_duration }} Years</span>
               </p>
               <h3><a href="#">{{ $course->course_name }}</a></h3>
               <p>{{ $course->course_descripition }}</p>
               <p><a href="#" class="btn btn-primary">Apply now</a></p>
            </div>
         </div>
         <?php
             $i++;
             if($i>=8) {
               break;
             }
         ?>
         @endforeach
      </div>
   </div>
</section>
<section class="ftco-section bg-light">
   <div class="container-fluid px-4">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Certified Teachers</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
         </div>
      </div>
      <div class="row">
      <?php
      $i = 0;
      ?>
      @foreach ($teachers as $teacher)
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
               <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image: url(storage/{{ $teacher->teacher_image }});"></div>
               </div>
               <div class="text pt-3 text-center">
                  <h3>{{ $teacher->teacher_name }}</h3>
                  <span class="position mb-2">{{ $teacher->subject_teacher }}</span>
                  <div class="faded">
                     <p>{{ $teacher->teacher_biology }}</p>
                     <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <?php
             $i++;
             if($i>=8) {
               break;
             }
         ?>
         @endforeach
      </div>
   </div>
</section>
<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(assets/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row justify-content-end">
         <div class="col-md-6 py-5 px-md-5">
            <div class="py-md-5">
               <div class="heading-section heading-section-white ftco-animate mb-5">
                  <h2 class="mb-4">Request A Quote</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
               </div>
               <form action="#" class="appointment-form ftco-animate">
                  <div class="d-md-flex">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name">
                     </div>
                     <div class="form-group ml-md-4">
                        <input type="text" class="form-control" placeholder="Last Name">
                     </div>
                  </div>
                  <div class="d-md-flex">
                     <div class="form-group">
                        <div class="form-field">
                           <div class="select-wrap">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                 <option value="">Select Your Course</option>
                                 <option value="">Art Lesson</option>
                                 <option value="">Language Lesson</option>
                                 <option value="">Music Lesson</option>
                                 <option value="">Sports</option>
                                 <option value="">Other Services</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-group ml-md-4">
                        <input type="text" class="form-control" placeholder="Phone">
                     </div>
                  </div>
                  <div class="d-md-flex">
                     <div class="form-group">
                        <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                     </div>
                     <div class="form-group ml-md-4">
                        <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
         </div>
      </div>
      <div class="row">
      <?php
      $i =0;
      ?>
      @foreach ($blogs as $blog)
         <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
               <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('storage/{{ $blog->blog_image }}');">
                  <div class="meta-date text-center p-2">
                     <!--<span class="day">26</span>
                     <span class="mos">June</span>
                     <span class="yr">2019</span>
                     <span class="">{{ $blog->created_at }}</span>-->
                  </div>
               </a>
               <div class="text bg-white p-4">
                  <h3 class="heading"><a href="#">{{ $blog->blog_title }}</a></h3>
                  <p>{{ $blog->blog_descripition }}</p>
                  <div class="d-flex align-items-center mt-4">
                     <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                     <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <?php
             $i++;
             if($i>=6) {
               break;
             }
         ?>
      @endforeach
      </div>
   </div>
</section>
<section class="ftco-section testimony-section">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Student Says About Us</h2>
            <p>
                CSJM University Kanpur offers admission to Foreign Students for selected courses as mentioned below, being
                run in University Campus. Foreign Student Admission Office (FSAO) is the single window for all foreign nationals
                who wish to take admission in CSJMU in different courses.
            </p>
         </div>
      </div>
      <div class="row ftco-animate justify-content-center">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
            <?php
                $i = 0 ;
            ?>
            @foreach ($teachers as $teacher)
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(storage/{{ $teacher->teacher_image }})">
                     </div>
                     <div class="text ml-2">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>{{ $teacher->teacher_biology }}</p>
                        <p class="name">{{ $teacher->subject_name }}</p>
                        <span class="position">{{ $teacher->subject_teacher }}</span>
                     </div>
                  </div>
               </div>
               <?php
                  $i++;
                  if($i>=5) {
                  break;
                  }
                ?>
            @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-gallery">
   <div class="container-wrap">
      <div class="row no-gutters">
      <?php
        $i = 0;
      ?>
      @foreach ($courses as $course)
         <div class="col-md-3 ftco-animate">
            <a href="assets/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(storage/{{ $course->course_image }});">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
      <?php
          $i++;
          if($i>=4) {
          break;
          }
      ?>
       @endforeach
      </div>
   </div>
</section>
@endsection
