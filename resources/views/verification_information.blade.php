@extends('layout.common')
@section('main')
@section('title', 'Upload Document')
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Upload Document </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="" method="post">
                        @csrf
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="student_photo">Upload Photo</label>
                                <input type="file" class="form-control" placeholder="upload photo" id="student_photo">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="student_sing">Upload Signature</label>
                                <input type="file" class="form-control" placeholder="upload Signature" id="student_sing">
                              </div>
                          </div>
                       <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                       </div>
                     </form>
                 </div>
        </div>
    </section>
@endsection


