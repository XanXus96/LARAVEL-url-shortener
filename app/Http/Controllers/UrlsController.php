<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Url;

class UrlsController extends Controller
{
    

	private function get_record_for_url($url)
	{
		return Url::firstOrCreate(
				['url'=>$url],
				['shortned'=>Url::get_unique_short_url()]
			);
	}

    public function create()
    {
    	return view('welcome');
    }
    
    public function store(Request $request)
    {
    	
    	// valider l'url
		
		$url=$request->get('url');

		\Validator::make(compact('url'),['url'=>'required|url'],['required'=>'Ce champ est requis.','url'=>'Cet url est invalide.'])->validate();
		
		//
		// verifier si l'url deja raccourcie le retrever
		
		return view('result')->withShortned($this->get_record_for_url($url)->shortned);
		
	
    }
    public function show($shortned)
    {
    	$url = Url::whereShortned($shortned)->first();
		if (!$url) {
			return redirect('/');
		}
			return redirect($url->url);
    }
}
