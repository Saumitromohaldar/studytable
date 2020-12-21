<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;


class CategoryController extends Controller
{
     /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function manageCategory()

    {

        $categories = Category::where('parent_id', '=', 0)->get();

        $allCategories = Category::pluck('title','id')->all();

        return view('backend.category.categoryTreeview',compact('categories','allCategories'));

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function addCategory(Request $request)

    {

        $this->validate($request, [

        		'title' => 'required|unique:categories',

        	]);

        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        
        Category::create($input);

        return back()->with('success', 'New Category added successfully.');

    }


     public function CategorList($cat_name,$cat_id)

    {

        $categories = Category::where('parent_id', '=', $cat_id)->get();

         $category = Category::where('id', '=', $cat_id)->first();

        return view('frontend.category.categorylist',compact('categories','category'));

    }

     public function SingleCategory(Request $request,$cat_name,$cat_id)

    {

        $questions = Question::where('category_id', $cat_id)
                    ->orderBy('subject_id')
                    ->paginate(10);

         if ($request->ajax()) {
            $view = view('frontend.exam.data',compact('questions'))->render();
            return response()->json(['html'=>$view]);
        }

         $category = Category::where('id', '=', $cat_id)->first();

        return view('frontend.category.category',compact('questions','category'));

    }
    


}
