<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model {
    public $fillable = ['first_name','last_name','favourite_subject','favourite_teacher','standard'];
}


?>