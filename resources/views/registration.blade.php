@extends('layout.common')
@section('main')
@section('title', 'Registration Information')
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Registration Form </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="" method="post">
                        @csrf
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="Candidate">Candidate's Name</label>
                                <input type="text" class="form-control" placeholder="Enter Candidate's Name" name="candidate_name" id="candidate_name">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="candidate_father_name">Candidate Parent/Father's Name </label>
                                <input type="text" class="form-control" placeholder="Enter Candidate Parent/Father's Name" name="candidate_father_name" id="candidate_father_name">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="gender">Select Gender</label>
                                  <select class="form-control" id="gender" name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                  </select>
                                </div>
                            </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="category">Select Category</label>
                                  <select class="form-control" id="category" name="category">
                                    <option>Genral</option>
                                    <option>OBC</option>
                                    <option>SC/ST</option>
                                    <option>Others</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nationality">Select Nationality</label>
                                  <select class="form-control" id="nationality" name="nationality">
                                    <option>Indian</option>
                                    <option>German</option>
                                    <option>Austrailian</option>
                                    <option>Africen</option>
                                  </select>
                                </div>
                            </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="Dob">Candidate's Date of Birth (YYYY-MM-DD)</label>
                                <input type="text" class="form-control" placeholder="Enter Candidate's Date of Birth" id="Dob" name="Dob">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">Email ID</label>
                                <input type="email" class="form-control" placeholder="Enter Email ID" id="email" name="email">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="mobile">Mobile No</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile No" id="mobile" name="mobile">
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
@endsection


