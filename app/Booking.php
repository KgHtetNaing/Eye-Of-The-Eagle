<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;
    protected $fillable = [
    	'customerid'
    ];

     public function customers()
    {
    	return $this->belongsTo('App\Customer');
    }
}
