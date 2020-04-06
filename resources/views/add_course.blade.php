@extends('layout.common')
@section('main')
@section('title', 'Add Courses')
  <script src="assets/ckeditor/ckeditor.js"></script>
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Add Courses Form </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="/add_course_post" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="course_name">Course Name</label>
                                <input type="text" class="form-control" placeholder="Enter Course Name" name="course_name" id="course_name">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="course_duration">Course Duration</label>
                                <input type="text" class="form-control" placeholder="Enter Course Duration in years" name="course_duration" id="course_duration">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="course_seat">Course Seat</label>
                                <input type="text" class="form-control" placeholder="Enter Course Seat" name="course_seat" id="course_seat">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="course_image">Upload Course Photo</label>
                                <input type="file" class="form-control" placeholder="upload photo" name="course_image" id="course_image">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="course_descripition">Course Descripition</label>
                                  <textarea class="form-control" rows="2" name="course_descripition" id="course_descripition"></textarea>
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
      CKEDITOR.replace('course_descripition');
    </script>
@endsection


