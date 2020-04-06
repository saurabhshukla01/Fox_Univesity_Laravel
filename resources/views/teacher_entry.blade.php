@extends('layout.common')
@section('main')
@section('title', 'Add Teacher')
  <script src="assets/ckeditor/ckeditor.js"></script>
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Teacher Entry Form </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="/add_teacher_post" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="teacher_name">Teacher Name</label>
                                <input type="text" class="form-control" placeholder="Enter Teacher Name" name="teacher_name" id="teacher_name">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="subject_teacher">Subject teacher</label>
                                <input type="text" class="form-control" placeholder="Enter Teacher Of Subject" name="subject_teacher" id="subject_teacher">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="teacher_image">Upload Teacher Photo</label>
                                <input type="file" class="form-control" placeholder="upload photo" name="teacher_image" id="teacher_image">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="teacher_biology">Teacher Biology</label>
                                  <textarea class="form-control" rows="2" name="teacher_biology" id="teacher_biology"></textarea>
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
      CKEDITOR.replace('teacher_biology');
    </script>
@endsection
