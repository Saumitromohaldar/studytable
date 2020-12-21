<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;
use App\Questiontype;
use App\Subject;
class questionController extends Controller
{


    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function allQuestions(){

        if(!empty($_GET['question'])){

            $questions = Question::where('question','LIKE',"%{$_GET['question']}%")->paginate(10);

        }else{
            $questions = Question::paginate(10);
     
        }
             

        return view('backend.questions.allquestions',compact('questions'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addQuestion(Request $request){
    	$allCategories = Category::pluck('title','id')->all();
        $allQuestiontypes = Questiontype::pluck('title','id')->all();
        $allSubjects = Subject::pluck('title','id')->all();

    	$questions = Question::orderBy('id', 'DESC')->paginate(10);

    /*	if ($request->ajax()) {
    		$view = view('backend.questions.data',compact('questions'))->render();
            return response()->json(['html'=>$view]);
        }*/

        return view('backend.questions.addquestion',compact('allCategories','questions','allQuestiontypes','allSubjects'));
    }

    

     /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function saveQuestion(Request $request)

    {

        $this->validate($request, [

        		'question' => 'required|unique:questions',

        	]);

        $input = $request->all();

       // print_r($input['questiontype_id']);
        //dd();
        //$input['description'] = empty($input['description']) ? '' : $input['description'];
        //$input['category_id'] = empty($input['category_id']) ? '' : $input['category_id'];

        

        $question=Question::create($input);

       // $post = new Question($request->all());
       // $post->save(); // you have a posts() relationship on the User model?
         $questiontypes = $request->input('questiontype_id', []);
        if(!empty($questiontypes) && !empty($questiontypes[0])){
            

           
            $question->questiontypes()->sync($questiontypes);
        }
        

       // $post->questiontypes()->attach($input['questiontype_id'],false);
        return back()->with('success', 'New Question added successfully.');

    }

      /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function deleteQuestion($question_id)

    {

        
        

        $question=Question::where('id',$question_id)->delete();

       
       // $post->questiontypes()->attach($input['questiontype_id'],false);
        return back()->with('success', ' Question deleted successfully.');

    }
    

    public function checkQuestion(Request $request)

    {

                
        $question=Question::where('question',$request->question)->first();
        if(!empty($question)){
            return response()->json(['success'=>'This question already exist.']);           
        }
        
       // $post->questiontypes()->attach($input['questiontype_id'],false);
      //  return back()->with('success', ' Question deleted successfully.');

    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editQuestion(Request $request,$question_id){
        $allCategories = Category::pluck('title','id')->all();
        $allQuestiontypes = Questiontype::pluck('title','id')->all();
        $allSubjects =  Subject::pluck('title','id')->all();

        $questions = Question::paginate(10);
        $question = Question::where('id',$question_id)->with('questiontypes')->first();
        $questiontype_ids=array();
        if($question->questiontypes){
            foreach($question->questiontypes as $key=>$questiontype){
               // print_r($questiontype->pivot->questiontype_id);
                $questiontype_ids[$key]=$questiontype->pivot->questiontype_id;
            }
        }
        
    /*  if ($request->ajax()) {
            $view = view('backend.questions.data',compact('questions'))->render();
            return response()->json(['html'=>$view]);
        }*/

        return view('backend.questions.editquestion',compact('allCategories','questions','allQuestiontypes','allSubjects','question','questiontype_ids'));
    }

    

    public function updateQuestion(Request $request,$id)

    {

        

        $this->validate($request, [

                'question' => 'required|unique:questions',

            ]);

        $input =$request->except('_token');

      /* print_r($request->except(['_token','questiontype_id']));
        dd();*/
        //$input['description'] = empty($input['description']) ? '' : $input['description'];
        //$input['category_id'] = empty($input['category_id']) ? '' : $input['category_id'];

        
       //  $question=Question::where('id',$id)->update($input);
       
         $question=Question::where('id',$id)->update($request->except(['_token','questiontype_id']));
         
       // $question=Question::create($input);
         $question=Question::where('id',$id)->first();
       // $post = new Question($request->all());
       // $post->save(); // you have a posts() relationship on the User model?
       // print_r($question->questiontypes()->getRelatedIds());
        $questiontypes = $request->input('questiontype_id', []);
        if(!empty($questiontypes) && !empty($questiontypes[0])){
           
            $question->questiontypes()->sync($input['questiontype_id']);
        }
       

       // $post->questiontypes()->attach($input['questiontype_id'],false);
        return back()->with('success', ' Question updated successfully.');

    }


    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function SingleQuestion($question_name,$question_id){

        

        $question = Question::where('id',$question_id)->first();
     
        
       
       // $questions = Question::paginate(10);

        return view('frontend.question.singlequestion',compact('question'));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Search(Request $request){

        

       //$questiontype = Questiontype::where('id', '=', $exam_id)->first();
         //$questions = Question::orderBy('subject_id')->where('questiontype_id',$exam_id)->paginate(10);

         $questions = Question::where('question','LIKE',"%{$_GET['q']}%")
                    ->orderBy('subject_id')
                    ->paginate(10);

         if ($request->ajax()) {
            $view = view('frontend.exam.data',compact('questions'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('frontend.search.search',compact('questions'));
    }

    

}
