<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questiontype;
use App\Question;
class ExamController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function examType($exam_name,$exam_id)
    { 	 
    	$questiontype = Questiontype::where('id', '=', $exam_id)->first();
    	$questiontypes = Questiontype::where('parent_id', '=', $exam_id)->get();

        return view('frontend.exam.exam',compact('questiontypes','questiontype'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function examName(Request $request, $exam_name,$exam_id)
    { 		
    	 $questiontype = Questiontype::where('id', '=', $exam_id)->first();
    	 //$questions = Question::orderBy('subject_id')->where('questiontype_id',$exam_id)->paginate(10);

    	 $questions = Question::join('question_questiontypes', 'question_questiontypes.question_id', '=', 'questions.id')
      				->where('question_questiontypes.questiontype_id', $exam_id)
      				->orderBy('subject_id')
      				->paginate(10);

    	 if ($request->ajax()) {
    		$view = view('frontend.exam.data',compact('questions'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('frontend.exam.examname',compact('questions','questiontype'));
    }
}
