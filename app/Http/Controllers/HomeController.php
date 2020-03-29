<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Model\Teacher_model;
use App\Model\Courses_model;
use App\Model\Blog_model;

class HomeController extends Controller
{
    public function index(){
        return View('index')
        ->with('courses', Courses_model::all())
        ->with('teachers', Teacher_model::all())
        ->with('blogs', Blog_model::all());

    }

    public function show()
    {
        $data_values = DB::select('select * from teachers');
        $data_values1 = DB::select('select * from courses_tables');
        //echo "<pre>";print_r($data_values);
        //echo "<pre>";print_r($data_values1);
        return View('try')->with(['data_values1'=>$data_values1])->with(['data_values'=>$data_values]);
    }

}
