@extends('layout.common')
@section('main')
@section('title', 'Add Blog')
<script src="assets/ckeditor/ckeditor.js"></script>
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Add Blog Form </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="/add_blog_post" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="blog_title">Blog Title</label>
                                <input type="text" class="form-control" placeholder="Enter Teacher Name" name="blog_title" id="blog_title">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="blog_image">Upload Blog Photo</label>
                                <input type="file" class="form-control" placeholder="upload photo" name="blog_image" id="blog_image">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="blog_descripition">Blog Descripition</label>
                                  <textarea class="form-control" rows="2" name="blog_descripition" id="blog_descripition"></textarea>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group ml-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </div>
                     </form>
                 </div>
        </div>
    </section>
    <script type="text/javascript">
      CKEDITOR.replace('blog_descripition');
    </script>
@endsection


