<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class SubjectController extends Controller
{
    
    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function manageSubject()

    {

        $subjects = \App\Subject::where('parent_id', '=', 0)->get();

        $allSubjects = \App\Subject::pluck('title','id')->all();

        return view('backend.subject.subjectTreeview',compact('subjects','allSubjects'));

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function addSubject(Request $request)

    {

        $this->validate($request, [

                'title' => 'required|unique:subjects',

            ]);

        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        

        \App\Subject::create($input);

        return back()->with('success', 'New Subject added successfully.');

    }
}
