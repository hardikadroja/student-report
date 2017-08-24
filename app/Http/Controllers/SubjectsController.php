<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subjects;

class SubjectsController extends Controller {

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

        $subject = Subjects::orderBy('id', 'DESC')->paginate(5);

        return view('Subjects.index', compact('subject'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function create() {

        return view('Subjects.create');
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */
    public function store(Request $request) {

        $this->validate($request, [

            'name' => 'required|unique:Subjects'
        ]);


        Subjects::create($request->all());

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject created successfully');
    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function show($id) {

        $subject = Subjects::find($id);

        return view('Subjects.show', compact('subject'));
    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function edit($id) {

        $subject = Subjects::find($id);

        return view('Subjects.edit', compact('subject'));
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

            'name' => 'required|unique:Subjects,name,'.$id
        ]);


        Subjects::find($id)->update($request->all());

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject updated successfully');
    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function destroy($id) {

        Subjects::find($id)->delete();

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject deleted successfully');
    }

}
