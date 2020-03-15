<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Model\Courses_model;

class Course_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data_value = Courses_model::where('course_id')->get();
        $data_value = Courses_model::where('course_id')->get();
        return view('add_course',['data'=>$data_value]);
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
        $data = new Courses_model();
        $data->course_name = request('course_name');
        $data->course_descripition = request('course_descripition');
        $data->course_duration = request('course_duration');
        $data->course_seat = request('course_seat');
        $path = $request->file('course_image')->store('public/Courses');
        $data->course_image = $path;
        //$data->course_image = "public/Courses/1.png";
        $data->save();
        return redirect('/add_course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data_values = DB::select('select * from courses_tables');
        //print_r($data_values);
        //die();
        return view('courses',['data_values'=>$data_values]);
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
