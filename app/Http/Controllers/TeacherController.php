<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;

class TeacherController extends Controller {

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {

        $teacher = Teacher::orderBy('id', 'DESC')->paginate(5);

        return view('Teacher.index', compact('teacher'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function create() {

        return view('Teacher.create');
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
            'education' => 'required'
        ]);


        Teacher::create($request->all());

        return redirect()->route('teacher.index')
                        ->with('success', 'New teacher has been added successfully');
    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function edit($id) {

        $teacher = Teacher::find($id);

        return view('Teacher.edit', compact('teacher'));
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
            'education' => 'required'
        ]);


        Teacher::find($id)->update($request->all());

        return redirect()->route('teacher.index')
                        ->with('success', 'Teacher data has been updated successfully');
    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function destroy($id) {

        Teacher::find($id)->delete();

        return redirect()->route('teacher.index')
                        ->with('success', 'Teacher record has been deleted successfully');
    }

}
