<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KiraBudget extends Model
{
     protected $fillable = [
     	'salarymonth', 
     	'bank', 
     	'month_working',
     	'bill',
     	'loans',
     	'food',
     	'transport',
     	'weekend',
     	'parents',
     	'family']; 
}
