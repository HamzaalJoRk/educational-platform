<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use Illuminate\Http\Request as Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = course::all();
        return view('index',[
            'course'=>$course,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createcourse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validate=$request->validate([
            'CourseName'=> 'bail|required|min:5|unique:courses|max:30',
            'Details'=>'required',

        ]);
        $newcourse=course::create([
            'CourseName' => $request->input('CourseName', 'Name'),
            'Details' => $request->Detalis
        ]);
        return redirect('/programmer'.$newcourse->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        $sessions = course::find($course->id)->session;
        return view('courses.course',[
            'course'=>$course,
            'session'=>$sessions,
        ]);
    }
    public function userscourse(course $course)
    {
        $coursesuser = course::find($course->id);
        return view('courses.CourseUsers',[
            'course'=>$course,
            'courseusers'=>$coursesuser,
        ]);
    }
//    public function sessions(course $course)
//    {
//        $sessions = course::find($course->id);
//        return
//    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        //
    }

}
