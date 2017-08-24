<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Students;
use App\Subjects;
use App\Teacher;
use DB;

class StudentsController extends Controller {

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        
        $students = DB::table('students')
                    ->orderBy('students.id','desc')
                    ->join('subjects', 'subjects.id', '=', 'students.favourite_subject')
                    ->join('teachers', 'teachers.id', '=', 'students.favourite_teacher')
                    ->select('students.*','subjects.name as subject_name','teachers.first_name as teacher_first_name','teachers.last_name as teacher_last_name')
                    ->paginate(5);
        
        
        //$students = Students::orderBy('id', 'DESC')->paginate(5);

        return view('Students.index', compact('students'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function create() {
        $subjectsList = Subjects::pluck('name', 'id');
        //$teachersList = Teacher::lists('first_name','last_name', 'id');
        $teachersList = array();
        foreach (Teacher::all() as $ecahTeacher) {
            $teachersList[$ecahTeacher->id] = $ecahTeacher->first_name." ".$ecahTeacher->last_name;
        }
        return view('Students.create', compact('subjectsList','teachersList')); 
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */
    public function store(Request $request) {

        $this->validate($request, [

            'first_name' => 'required',
            'last_name' => 'required',
            'favourite_subject' => 'required',
            'favourite_teacher' => 'required',
            'standard' => 'required'
        ]);


        Students::create($request->all());

        return redirect()->route('students.index')
                        ->with('success', 'New student has been added successfully');
    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function edit($id) {
        $subjectsList = Subjects::pluck('name', 'id');
        $teachersList = array();
        foreach (Teacher::all() as $ecahTeacher) {
            $teachersList[$ecahTeacher->id] = $ecahTeacher->first_name." ".$ecahTeacher->last_name;
        }
        $student = Students::find($id);

        return view('Students.edit', compact('student','teachersList','subjectsList'));
    }

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function update(Request $request, $id) {

        $this->validate($request, [

            'first_name' => 'required',
            'last_name' => 'required',
            'favourite_subject' => 'required',
            'favourite_teacher' => 'required',
            'standard' => 'required'
        ]);


        Students::find($id)->update($request->all());

        return redirect()->route('students.index')
                        ->with('success', 'Student data has been updated successfully');
    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function destroy($id) {

        Students::find($id)->delete();

        return redirect()->route('students.index')
                        ->with('success', 'Student record has been deleted successfully');
    }

}
