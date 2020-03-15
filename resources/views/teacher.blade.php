@extends('layout.common')
@section('main')
@section('title', 'Staff')

    <section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row">
				@foreach ($data_values as $data_value)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(assets/{{ $data_value->teacher_image }});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>{{ $data_value->teacher_name }}</h3>
								<span class="position mb-2">{{ $data_value->subject_teacher }}</span>
								<div class="faded">
									<p>{{ $data_value->teacher_biology }}</p>
									<ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                      </ul>
                                  </div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
@endsection

