<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $fillable = ['question','description','answer_a','answer_b','answer_c','answer_d','correct_answer','category_id','subject_id',];

    public function questiontypes(){
	    return $this->belongsToMany(Questiontype::class,'question_questiontypes');
	}
}
