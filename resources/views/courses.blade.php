@extends('layout.common')
@section('main')
@section('title', 'Courses')
    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
				@foreach ($data_values as $data_value)
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(assets/{{ $data_value->course_image }});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>{{ $data_value->course_seat }}seats</span>
								<span><i class="icon-calendar mr-2"></i>{{ $data_value->course_duration }} Years</span>
							</p>
							<h3><a href="#">{{ $data_value->course_name }}</a></h3>
							<p>{{ $data_value->course_descripition }}</p>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</section>
@endsection
