<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    //
    public $timestamps=false ;

    protected $fillable=['url','shortned']; 

    public static function get_unique_short_url() 
	{

		$shortned=str_random(5);
		
		if (Url::whereShortned($shortned)->count() != 0 )
		{
			return $this->get_unique_short_url();
		}
		return $shortned;
	}
}
