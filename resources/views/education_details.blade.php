@extends('layout.common')
@section('main')
@section('title', 'Education Details Information')
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			    <h2 class="text-center pt-4 pb-4"> Educational Information </h2>
				<div class="row d-flex">
                     <form class=" row w-100" action="education_details_post" method="post">
                        @csrf
                          <div class="w-100">
                              <h3> Highschool </h3>
                              <div class="form-group Education">
                                  <label for="board_university">Board/University</label>
                                  <input type="text" class="form-control" placeholder="Board Name" name="board_university" id="board_university">
                              </div>
                              <div class="form-group Education">
                                  <label for="class_name">Select Graducation</label>
                                  <select class="form-control" id="class_name" name="class_name">
                                    <option>10th</option>
                                    <option>12th</option>
                                    <option>Graducation</option>
                                    <option>Post Graducation</option>
                                  </select>
                                </div>
                            <div class="form-group Education">
                                  <label for="university_collage_name">School/Collage Name</label>
                                  <input type="text" class="form-control" placeholder="School /Collage Name" name="university_collage_name" id="university_collage_name">
                            </div>
                            <div class="form-group Education">
                                  <label for="subject">Subject</label>
                                  <input type="text" class="form-control" placeholder="Subject Name" name="subject" id="subject">
                            </div>
                            <div class="form-group Education">
                                  <label for="passing_year">Passing Year</label>
                                  <input type="text" class="form-control" placeholder="Passing Year" name="passing_year" id="passing_year">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_obtain">Marks Obtain</label>
                                  <input type="text" class="form-control" placeholder="Marks Obtains" name="mark_obtain" id="mark_obtain">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_total">Total Marks</label>
                                  <input type="text" class="form-control" placeholder="Total Marks" name="mark_total" id="mark_total">
                            </div>
                            <div class="form-group Education">
                                  <label for="percentage_mark">% Or Grade</label>
                                  <input type="text" class="form-control" placeholder="% Or Grade" name="percentage_mark" id="percentage_mark">
                            </div>
                         </div>
                         <div class="w-100">
                              <h3> Intermediate </h3>
                              <div class="form-group Education">
                                  <label for="board_university1">Board/University</label>
                                  <input type="text" class="form-control" placeholder="Board Name" name="board_university1" id="board_university1">
                              </div>
                              <div class="form-group Education">
                                  <label for="class_name1">Select Graducation</label>
                                  <select class="form-control" id="class_name1" name="class_name1">
                                    <option>10th</option>
                                    <option>12th</option>
                                    <option>Graducation</option>
                                    <option>Post Graducation</option>
                                  </select>
                                </div>
                            <div class="form-group Education">
                                  <label for="university_collage_name1">School/Collage Name</label>
                                  <input type="text" class="form-control" placeholder="School /Collage Name" name="university_collage_name1" id="university_collage_name1">
                            </div>
                            <div class="form-group Education">
                                  <label for="subject1">Subject</label>
                                  <input type="text" class="form-control" placeholder="Subject Name" name="subject1" id="subject1">
                            </div>
                            <div class="form-group Education">
                                  <label for="passing_year1">Passing Year</label>
                                  <input type="text" class="form-control" placeholder="Passing Year" name="passing_year1" id="passing_year1">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_obtain1">Marks Obtain</label>
                                  <input type="text" class="form-control" placeholder="Marks Obtains" name="mark_obtain1" id="mark_obtain1">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_total1">Total Marks</label>
                                  <input type="text" class="form-control" placeholder="Total Marks" name="mark_total1" id="mark_total1">
                            </div>
                            <div class="form-group Education">
                                  <label for="percentage_mark1">% Or Grade</label>
                                  <input type="text" class="form-control" placeholder="% Or Grade" name="percentage_mark1" id="percentage_mark1">
                            </div>
                         </div>
                         <div class="w-100">
                              <h3> Graducation </h3>
                              <div class="form-group Education">
                                  <label for="board_university2">Board/University</label>
                                  <input type="text" class="form-control" placeholder="Board Name" name="board_university2" id="board_university2">
                              </div>
                              <div class="form-group Education">
                                  <label for="class_name2">Select Graducation</label>
                                  <select class="form-control" id="class_name2" name="class_name2">
                                    <option>10th</option>
                                    <option>12th</option>
                                    <option>Graducation</option>
                                    <option>Post Graducation</option>
                                  </select>
                                </div>
                            <div class="form-group Education">
                                  <label for="university_collage_name2">School/Collage Name</label>
                                  <input type="text" class="form-control" placeholder="School /Collage Name" name="university_collage_name2" id="university_collage_name2">
                            </div>
                            <div class="form-group Education">
                                  <label for="subject2">Subject</label>
                                  <input type="text" class="form-control" placeholder="Subject Name" name="subject2" id="subject2">
                            </div>
                            <div class="form-group Education">
                                  <label for="passing_year2">Passing Year</label>
                                  <input type="text" class="form-control" placeholder="Passing Year" name="passing_year2" id="passing_year2">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_obtain2">Marks Obtain</label>
                                  <input type="text" class="form-control" placeholder="Marks Obtains" name="mark_obtain2" id="mark_obtain2">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_total2">Total Marks</label>
                                  <input type="text" class="form-control" placeholder="Total Marks" name="mark_total2" id="mark_total2">
                            </div>
                            <div class="form-group Education">
                                  <label for="percentage_mark2">% Or Grade</label>
                                  <input type="text" class="form-control" placeholder="% Or Grade" name="percentage_mark2" id="percentage_mark2">
                            </div>
                         </div>
                         <div class="w-100">
                              <h3> Post Graducation </h3>
                              <div class="form-group Education">
                                  <label for="board_university3">Board/University</label>
                                  <input type="text" class="form-control" placeholder="Board Name" name="board_university3" id="board_university3">
                              </div>
                              <div class="form-group Education">
                                  <label for="class_name3">Select Graducation</label>
                                  <select class="form-control" id="class_name3" name="class_name3">
                                    <option>10th</option>
                                    <option>12th</option>
                                    <option>Graducation</option>
                                    <option>Post Graducation</option>
                                  </select>
                                </div>
                            <div class="form-group Education">
                                  <label for="university_collage_name3">School/Collage Name</label>
                                  <input type="text" class="form-control" placeholder="School /Collage Name" name="university_collage_name3" id="university_collage_name3">
                            </div>
                            <div class="form-group Education">
                                  <label for="subject3">Subject</label>
                                  <input type="text" class="form-control" placeholder="Subject Name" name="subject3" id="subject3">
                            </div>
                            <div class="form-group Education">
                                  <label for="passing_year3">Passing Year</label>
                                  <input type="text" class="form-control" placeholder="Passing Year" name="passing_year3" id="passing_year3">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_obtain3">Marks Obtain</label>
                                  <input type="text" class="form-control" placeholder="Marks Obtains" name="mark_obtain3" id="mark_obtain3">
                            </div>
                            <div class="form-group Education">
                                  <label for="mark_total3">Total Marks</label>
                                  <input type="text" class="form-control" placeholder="Total Marks" name="mark_total3" id="mark_total3">
                            </div>
                            <div class="form-group Education">
                                  <label for="percentage_mark3">% Or Grade</label>
                                  <input type="text" class="form-control" placeholder="% Or Grade" name="percentage_mark3" id="percentage_mark3">
                            </div>
                         </div>
                         <div class="col-md-12">
                              <div class="form-group Education">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </div>
                     </form>
                 </div>
        </div>
    </section>
@endsection


