<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Metadata;
use App\Header;
use App\About;
use App\Contact;
use App\Nosotros;
use App\Article;

class WebController extends Controller
{
    public function index()
    {
        $meta     = Metadata::find('1');
        $header   = Header::find('1');
        $about    = About::find('1');
        $contact  = Contact::find('1');
        $nosotros = Nosotros::orderBy('id', 'ASC')
                    ->where('status', true)
                    ->limit(3)
                    ->get();
        $articles = Article::orderBy('id', 'DESC')
                    ->where('status', true)
                    ->limit(3)
                    ->get();
    	return view('web.index.index')
    			->with('meta', $meta)
    			->with('header', $header)
    			->with('about', $about)
                ->with('contact', $contact)
                ->with('nosotros', $nosotros)
    			->with('articles', $articles);
    }
}
