<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Student;



class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = User::all();
        //dd($contacts);
        return response()->json(['status' => true, "message" => "api working!", "users => $contacts"]);
    }



  
    public function studentdata()
    {
        $student = Student::all();
        dd($student);
        return response()->json(['status' => true, "message" => "api working!", "users => $student"]);
    }
   



    // -----Valid Form ftech using Post ----//
    public function store(Request $request)
    {
    // Form validation
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required ',
        'class'=>'required',
       
     ]);


        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->address = $request->input('address');
        $student->class = $request->input('class');
        $student->save();
        return response()->json(['status' => true, "message" => "student worked sucess!", "users => $student"]);
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
    // public function store(Request $request)
    // {
    //     //
    // }

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
