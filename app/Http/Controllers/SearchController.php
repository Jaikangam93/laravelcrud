<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Crud;

class SearchController extends Controller
{
    public function view(){

    	return view('pages.search');

    }
    public function search()
    {

    	$q = Input::get ('searchdata');
    	if($q != '')
    	{
    		$displays = Crud::where ( 'firstname', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    		if (count ($displays)>0)
			return view ( 'pages.search' )->withDetails ( $displays )->withQuery ( $q );
		else 
			return view ( 'pages.search' )->withMessage ( 'No Details found. Try to search again !' );

    	}
		else 
			return view ( 'pages.search' )->withMessage ( 'No Details found. Try to search again !' );

    }
}
