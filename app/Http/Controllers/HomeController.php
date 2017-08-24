<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
      public function __construct()
      {
      $this->middleware('auth');
      }
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        /*
          $students = DB::table('students')
          ->join('subjects', 'subjects.id', '=', 'students.favourite_subject')
          ->join('teachers', 'teachers.id', '=', 'students.favourite_teacher')
          ->select('students.*','subjects.name as subject_name','teachers.first_name as teacher_first_name','teachers.last_name as teacher_last_name')
          ->where('students.standard', 1)
          ->get();
         */
        $studentsDetail = array();
        $studentSubjects = DB::table('students')
                ->join('subjects', 'subjects.id', '=', 'students.favourite_subject')
                ->select('subjects.name as subject_name', DB::raw('count(students.favourite_subject) as sumOFSubject'), 'students.standard')
                ->groupBy('students.favourite_subject', 'students.standard')
                ->orderBy('students.standard', 'ASC')
                ->get();
        foreach ($studentSubjects as $eachStudentSubject):
            $studentsDetail['subjects'][$eachStudentSubject->standard][$eachStudentSubject->subject_name] = $eachStudentSubject->sumOFSubject;
        endforeach;

        $studentTeachers = DB::table('students')
                ->join('teachers', 'teachers.id', '=', 'students.favourite_teacher')
                ->select(DB::raw('CONCAT(teachers.first_name," ",teachers.last_name) as teacher_name'), DB::raw('count(students.favourite_teacher) as sumOFTeacher'), 'students.standard')
                ->groupBy('students.favourite_teacher', 'students.standard')
                ->orderBy('students.standard', 'ASC')
                ->get();

        foreach ($studentTeachers as $eachStudentTeacher):
            $studentsDetail['teachers'][$eachStudentTeacher->standard][$eachStudentTeacher->teacher_name] = $eachStudentTeacher->sumOFTeacher;
        endforeach;
        return view('home', compact('studentsDetail'));
    }

    function chartData() {
        $studentsDetail = array();
        $studentSubjects = DB::table('students')
                ->join('subjects', 'subjects.id', '=', 'students.favourite_subject')
                ->select('subjects.name as subject_name', DB::raw('count(students.favourite_subject) as sumOFSubject'), 'students.standard')
                ->groupBy('students.favourite_subject', 'students.standard')
                ->orderBy('students.standard', 'ASC')
                ->get();
        foreach ($studentSubjects as $eachStudentSubject):
            $studentsDetail['subjects'][$eachStudentSubject->standard][$eachStudentSubject->subject_name] = $eachStudentSubject->sumOFSubject;
        endforeach;

        $studentTeachers = DB::table('students')
                ->join('teachers', 'teachers.id', '=', 'students.favourite_teacher')
                ->select(DB::raw('CONCAT(teachers.first_name," ",teachers.last_name) as teacher_name'), DB::raw('count(students.favourite_teacher) as sumOFTeacher'), 'students.standard')
                ->groupBy('students.favourite_teacher', 'students.standard')
                ->orderBy('students.standard', 'ASC')
                ->get();

        foreach ($studentTeachers as $eachStudentTeacher):
            $studentsDetail['teachers'][$eachStudentTeacher->standard][$eachStudentTeacher->teacher_name] = $eachStudentTeacher->sumOFTeacher;
        endforeach;
       
        return response()->json($studentsDetail);
    }

}
