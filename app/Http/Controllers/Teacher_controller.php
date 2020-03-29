<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Model\Teacher_model;

class Teacher_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher_model::where('teacher_id')->get();
        return view('teacher_entry',['teachers'=>$teachers]);

        //$teachers = Teacher_model::all();
        //return view('teacher_entry',compact('teachers'));
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
        $data = new Teacher_model();
        $data->teacher_name = request('teacher_name');
        $data->subject_teacher = request('subject_teacher');
        $data->teacher_biology = request('teacher_biology');
        $path = $request->file('teacher_image')->store('Teacher');
        $data->teacher_image = $path;
        //$data->teacher_image = "public/Courses/1.png";
        $data->save();
        return redirect('/add_teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $teachers = DB::select('select * from teachers');
        //print_r($data_values);
        //die();
        return view('teacher',['teachers'=>$teachers]);
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
