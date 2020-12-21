<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionQuestiontype extends Model
{
    protected $table = 'question_questiontypes';

     public function questionquestiontype() {

        return $this->hasMany('App\Question','question_id') ;

    }
}
