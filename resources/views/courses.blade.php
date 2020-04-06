@extends('layout.common')
@section('main')
@section('title', 'Courses')
    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
				@foreach ($courses as $course)
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(storage/{{ $course->course_image }});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>{{ $course->course_seat }}seats</span>
								<span><i class="icon-calendar mr-2"></i>{{ $course->course_duration }} Years</span>
							</p>
							<h3><a href="#">{{ $course->course_name }}</a></h3>
							<p>{{ $course->course_descripition }}</p>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
				@endforeach
				</div>
			</div>
			<div class="row text-right float-right pr-4">
                <h5 class="m-2 p-2">{{ $courses->links() }}</h5>
            </div>
		</section>
@endsection
