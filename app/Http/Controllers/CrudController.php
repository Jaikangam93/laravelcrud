<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Delete;
use App\Blog;
use Illuminate\Support\Facades\Input;
use DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get it all the Data 
        $displays = Crud::orderBy('id','asc')->paginate(5);

        // load the view and pass the data to view  
        return view('pages.read', compact('displays'));
    }

   
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'firstname' => 'required|min:5|max:35',
                'lastname' => 'required|min:5|max:35',
                'email' => 'required|email|unique:users',
                'mobileno' => 'required|numeric',
                
            ],[
                'firstname.required' => ' The first name field is required.',
                'firstname.min' => ' The first name must be at least 5 characters.',
                'firstname.max' => ' The first name may not be greater than 35 characters.',
                'lastname.required' => ' The last name field is required.',
                'lastname.min' => ' The last name must be at least 5 characters.',
                'lastname.max' => ' The last name may not be greater than 35 characters.',
            ]);

        $data = array(
                'firstname'   => $request->input ('firstname'),
                'lastname'    => $request->input ('lastname'),
                'email' => $request->input ('email'),
                'mobileno'        => $request->input ('mobileno'),
                
            );

        DB::table ('cruds')->insert ($data);

        

        Session::flash('success',' Form successfully Submitted');

        return back(); return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $displays = Crud::find($id);
        return view('pages.show',compact('displays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $displays = Crud::find($id);
        return view('pages.edit',compact('displays'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
                'firstname' => 'required|min:5|max:35',
                'lastname' => 'required|min:5|max:35',
                'email' => 'required|email|unique:users',
                'mobileno' => 'required|numeric',
                
            ],[
                'firstname.required' => ' The first name field is required.',
                'firstname.min' => ' The first name must be at least 5 characters.',
                'firstname.max' => ' The first name may not be greater than 35 characters.',
                'lastname.required' => ' The last name field is required.',
                'lastname.min' => ' The last name must be at least 5 characters.',
                'lastname.max' => ' The last name may not be greater than 35 characters.',
            ]);


        $displays = Crud::find($id);
       
        $displays->firstname= Input::get('firstname');
        $displays->lastname=  Input::get('lastname');
        $displays->email =  Input::get('email');
        $displays->mobileno=  Input::get('mobileno');
       
        $displays->save();
        
        dd($displays);

        Session::flash('message',' Form update successfully');

        //return redirect()->route('cruds.show',$displays->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Crud::find($id)->delete();
       

        Session::flash('delete_message', 'Post successfully deleted!');

        return redirect()->route('cruds.index');
    }
}
