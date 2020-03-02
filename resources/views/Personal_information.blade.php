@extends('layout.common')
@section('main')
@section('title', 'Personal Information')
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Personal Information </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="" method="post">
                        @csrf
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="address_line1">Address Line 1</label>
                                <input type="text" class="form-control" placeholder="Enter Address Line" name="address_line1" id="address_line1">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="address_line2">Address Line 2</label>
                                <input type="text" class="form-control" placeholder="Enter Address Line" name="address_line2" id="address_line2">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" placeholder="state" name="state" id="state">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" placeholder="country" name="country" id="country">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" placeholder="city" name="city" id="city">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="text" class="form-control" placeholder="Pincode"  name="pincode" id="pincode">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="addhar_number">Addhar Card Number</label>
                                <input type="text" class="form-control" placeholder="addhar number" name="addhar_number" id="addhar_number">
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


