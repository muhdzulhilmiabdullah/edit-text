<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetList extends Model
{
    protected $fillable =	[
    	'date',
    	'item',
    	'amount'];
}
