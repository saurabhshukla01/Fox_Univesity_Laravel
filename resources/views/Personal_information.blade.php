@extends('layout.common')
@section('main')
@section('title', 'Personal Information')
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Personal Information </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="/education_details">
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Address Line 1</label>
                                <input type="text" class="form-control" placeholder="Enter Address Line" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Address Line 2</label>
                                <input type="text" class="form-control" placeholder="Enter Address Line" id="">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="">State</label>
                                <input type="text" class="form-control" placeholder="state" id="">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Country</label>
                                <input type="text" class="form-control" placeholder="country" id="">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="">City</label>
                                <input type="text" class="form-control" placeholder="city" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pincode</label>
                                <input type="text" class="form-control" placeholder="Pincode" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Addhar Card Number</label>
                                <input type="text" class="form-control" placeholder="addhar_card" id="">
                              </div>
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


