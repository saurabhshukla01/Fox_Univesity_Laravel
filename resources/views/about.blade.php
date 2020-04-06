@extends('layout.common')
@section('main')
@section('title', 'About Us')
<section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container">
      <div class="row d-flex">
         <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url(assets/images/about.jpg); border"></div>
         </div>
         <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Chhatrapati Shahu Ji Maharaj University Stablished Since 1966</h2>
            <p>
                Located in one of the biggest industrial metropolis of State of Uttar Pradesh Kanpur. Chhatrapati Shahu Ji Maharaj University
                stands as a hallmark of higher education. It is an educational community where students of various religions and cultural
                backgrounds study and work together in a congenial atmosphere. The university is geared to provide maximum scholastic benefit
                to each individual student.
            </p>
            <p>
                The Chhatrapati Shahu Ji Maharaj University Kanpur, has been on the map of higher education for more than three decades.
                 Established in 1966, it has not looked back, now it has 170 affiliated colleges in 15 districts. Spreading over a campus of
                 264 acres, the university is booming with academic activities. While the undergraduate and post-graduate programmes in all
                 disciplines of Art, Science, Commerce, Law, Engineering and Medicine are offered in affiliated colleges and institutions,
                 the residential wing of the campus includes faculties of Life Sciences, Business Management, Education and English. It also has
                 a computer centre, a department of Adult and Continuing Education, Communication and a College Development Council. For catering
                 to the needs of young engineering aspirants, the university has recently started an Institute of Engineering and Technology in
                 the campus offering courses in four branches of engineering viz. Chemical, Computer Science and Information, Mechanical Engineering
                 in the first instance. The university seeks to contribute to student an education through curriculum design, the development
                 of new courses and the application of a forward looking and innovative teaching methodology. Kanpur, the industrial capital
                 of U.P. and commonly known as the Manchester of Northern India has had a very eventful history. It has contributed much to
                 the growth and economic development of the country. Equally memorable and inspiring is its role in the first Indian War
                 of Independence.
             </p>
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
