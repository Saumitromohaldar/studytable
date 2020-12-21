<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questiontype extends Model
{
    public $fillable = ['title','parent_id'];


    /**

     * Get the index name for the model.

     *

     * @return string

    */

    public function childs() {

        return $this->hasMany('App\Questiontype','parent_id','id') ;

    }


    public function questions(){
    	return $this->belongsToMany(Question::class,'question_questiontypes');
   	}
}
