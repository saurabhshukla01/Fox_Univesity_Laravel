@extends('layout.common')
@section('main')
@section('title', 'Blog')
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
      @foreach ($blogs as $blog)
         <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
               <a href="" class="block-20 d-flex align-items-end" style="background-image: url('storage/{{ $blog->blog_image }}');">
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
      @endforeach
      </div>
   </div>
  <div class="row text-right float-right pr-4">
       <h5 class="m-2 p-2">{{ $blogs->links() }}</h5>
   </div>
</section>
@endsection
