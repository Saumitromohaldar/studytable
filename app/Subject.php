<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $fillable = ['title','parent_id'];


    /**

     * Get the index name for the model.

     *

     * @return string

    */

    public function childs() {

        return $this->hasMany('App\Subject','parent_id','id') ;

    }
}
