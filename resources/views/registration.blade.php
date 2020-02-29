@extends('layout.common')
@section('main')
@section('title', 'Registration Information')
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Registration Form </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="/Personal_information">
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Candidate's Name</label>
                                <input type="text" class="form-control" placeholder="Enter Candidate's Name" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Candidate Parent/Father's Name </label>
                                <input type="text" class="form-control" placeholder="Enter Candidate Parent/Father's Name" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Select Gender</label>
                                  <select class="form-control" id="" name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                  </select>
                                </div>
                            </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Select Category</label>
                                  <select class="form-control" id="" name="category">
                                    <option>Genral</option>
                                    <option>OBC</option>
                                    <option>SC/ST</option>
                                    <option>Others</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Select Nationality</label>
                                  <select class="form-control" id="" name="nationality">
                                    <option>Indian</option>
                                    <option>German</option>
                                    <option>Austrailian</option>
                                    <option>Africen</option>
                                  </select>
                                </div>
                            </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Candidate's Date of Birth (DD/MM/YYYY)</label>
                                <input type="text" class="form-control" placeholder="Enter Candidate's Date of Birth" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="email" class="form-control" placeholder="Enter Email ID" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Mobile No</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile No" id="">
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


