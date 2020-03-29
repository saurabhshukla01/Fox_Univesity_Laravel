<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Model\Teacher_model;
use App\Model\Courses_model;
use App\Model\Blog_model;

class InformationController extends Controller
{
    public function index(){
        return View('about')
        ->with('courses', Courses_model::all())
        ->with('teachers', Teacher_model::all())
        ->with('blogs', Blog_model::all());

    }
    public function signmail(){
        return View('signmail');
        //return (echo "Thank you for Subscribing !!");
    }
}
