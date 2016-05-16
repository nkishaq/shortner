<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Tbl_url;
use Redirect;

class ShortnerController extends Controller
{
    /**
     *  Calling home page blade.
     *
     */
    public function getHome()
    {
        //
		return view('front.home');
    }
	
	
	/**
     *  Ajax post request from home page when  click SHORTEN button
     *	
     * 	After validation inserting to tbl_urls table
     */
	 
	 
	public function postLongUrl(Request $request)
	{
		$rules =[
    			'long_url' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
				];
    	
    	$validator = Validator::make($request->all(), $rules);
    	if ( $validator->fails())
    	{
    		return response()->json([
    				'errors' =>$validator->messages(),
    				'code' => 400 // bad request
    		]);
    	}
		
		if($result=Tbl_url::create([
			'url_short'=>$this->generateShorturl(),
			'url_long'=>$request->input('long_url'),
		])){
			
			return response()->json([
					'urls' =>$result,
					'code' => 200 //success request
			]);
		}
		
		return response()->json([
    				'errors' =>
    				['Internal Error '],
    				'code' => 400 // bad request
    		]);
	}
	
	
	/**
     *  This function invoke short URL
     *	
     * 	
     */
	
	public function getShortUrl($short)
    {
        //
		$result=Tbl_url::where('url_short',$short)->first();
		
		$redirect = "http://".str_replace("https://","",str_replace("http://","",$result->url_long));
		
		return Redirect::to($redirect);
    }
	
	/**
     *  This functions using for genarating unique short url to table 
     *	
     * 	gerating random string. string Length is 5 
     */
	
	private function generateShorturl()
	{
		
    	$short = substr(str_random(40),0,5); 
        	
    	return $this->shorturlExists($short);
    }
    
	private function shorturlExists($short)
	{
    	
    	if (Tbl_url::whereUrlShort($short)->exists())
    	{
    		return $this->generateShorturl();
    	}
    	return $short;
    }
    
}
