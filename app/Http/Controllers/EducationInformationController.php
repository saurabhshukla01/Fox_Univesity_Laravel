<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Education_Information_model;

class EducationInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_value = Education_Information_model::all();
        return view('education_details',compact('data_value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Education_Information_model();
        $data->board_university = request('board_university');
        $data->class_name = request('class_name');
        $data->university_collage_name = request('university_collage_name');
        $data->subject = request('subject');
        $data->passing_year = request('passing_year');
        $data->mark_obtain = request('mark_obtain');
        $data->mark_total = request('mark_total');
        $data->percentage_mark = request('percentage_mark');
        $data->board_university1 = request('board_university1');
        $data->class_name1 = request('class_name1');
        $data->university_collage_name1 = request('university_collage_name1');
        $data->subject1 = request('subject1');
        $data->passing_year1 = request('passing_year1');
        $data->mark_obtain1 = request('mark_obtain1');
        $data->mark_total1 = request('mark_total1');
        $data->percentage_mark1 = request('percentage_mark1');
        $data->board_university2 = request('board_university2');
        $data->class_name2 = request('class_name2');
        $data->university_collage_name2 = request('university_collage_name2');
        $data->subject2 = request('subject2');
        $data->passing_year2 = request('passing_year2');
        $data->mark_obtain2 = request('mark_obtain2');
        $data->mark_total2 = request('mark_total2');
        $data->percentage_mark2 = request('percentage_mark2');
        $data->board_university3 = request('board_university3');
        $data->class_name3 = request('class_name3');
        $data->university_collage_name3 = request('university_collage_name3');
        $data->subject3 = request('subject3');
        $data->passing_year3 = request('passing_year3');
        $data->mark_obtain3 = request('mark_obtain3');
        $data->mark_total3 = request('mark_total3');
        $data->percentage_mark3 = request('percentage_mark3');
        $data->save();
        return redirect('/verification_information');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
