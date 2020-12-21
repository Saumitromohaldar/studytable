<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questiontype;
class QuestiontypeController extends Controller
{
    

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function manageQuestiontype()

    {

        $questiontypes = Questiontype::where('parent_id', '=', 0)->get();
       // $questiontypes = Questiontype::where('parent_id', 0)->orderBy('title')->pluck('title', 'id');
        $allQuestiontypes = Questiontype::where('parent_id', 0)->orderBy('title')->pluck('title','id')->all();

        return view('backend.questiontype.questiontypesTreeview',compact('questiontypes','allQuestiontypes'));

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function addQuestiontype(Request $request)

    {

        $this->validate($request, [

                'title' => 'required|unique:questiontypes',

            ]);

        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        

        Questiontype::create($input);

        return back()->with('success', 'New Question type added successfully.');

    }



}
