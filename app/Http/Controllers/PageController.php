<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Mail;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function getcontact()
    {
    	return view ('pages.contact');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|min:5',
    		'email'=> 'required|email',
    	]);

    	$data = array(
    		'name'=> $request->name,
    		'email' => $request->email,
    		'bodymessage' => $request->message
    	);

    	Mail::send('emails.contact', $data, function($message) use ($data){
    			$message->from('symbio@gmail.com'); 
    			$message->to($data['email']);
    				
  
    	});  

    	Session::flash('success','your email was send!');
    	return redirect()->back();






    }
}
 