<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextEdit extends Model
{
    protected $fillable = ['project_name', 'project_code', 'project_text']; 
}
