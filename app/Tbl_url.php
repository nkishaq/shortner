<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_url extends Model
{
    //
	protected $table = 'tbl_urls';
    
    protected $fillable = ['url_short', 'url_long'];
}
