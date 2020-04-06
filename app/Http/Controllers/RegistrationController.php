<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Registration_model;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_value = Registration_model::all();
        return view('registration',compact('data_value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_uid = mt_rand(10000000,99999999);
        $data = new Registration_model();
        $data->candidate_name = request('candidate_name');
        $data->candidate_father_name = request('candidate_father_name');
        $data->gender = request('gender');
        $data->category = request('category');
        $data->nationality = request('nationality');
        $data->Dob = request('Dob');
        $data->email = request('email');
        $data->mobile = request('mobile');
        $data->user_uid = $data->candidate_name.$user_uid;
        //print_r($data);die();
        $data->save();
        return redirect('/Personal_information');
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
