<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Ajax.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ajax.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function search(Request $request)
       
        {
            // return $request->all();

            if ($request->search_keyword == null) {

                $cruds = Contact::all();

            }

            else{
                
                $cruds = Contact::
                 where('name','LIKE','%'.$request->search_keyword.'%')
                ->orWhere('email','LIKE','%'.$request->search_keyword.'%')
                ->orWhere('mobile_number','LIKE','%'.$request->search_keyword.'%')
                ->orWhere('subject','LIKE','%'.$request->search_keyword.'%')
                ->orWhere('message','LIKE','%'.$request->search_keyword.'%')
                ->get();  
            }

            return $cruds;
                 

        }    



    public function showView()
    
    {
        return view('Ajax.create');
    }

    
    public function store(Request $request)

    {

        $crud = new Contact;
        $crud->name = $request->get('name');
        $crud->email = $request->get('email');
        $crud->mobile_number = $request->get('mobile_number');
        $crud->subject = $request->get('subject');
        $crud->message = $request->get('message');
        $crud->save();

        return response()->json(['success'=>'Form is successfully submitted!']);

    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function edit()
    // {
    //     $crud = Contact::find($id);
    //     return view('Ajax.edit',compact($crud));
    //     // return response()->json($crud);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function update(Request $request, $id)
    // {
    //     // $crud = Contact::findorfail($id);
    //     // $crud->name=$request->get('name');
    //     // $crud->email=$request->get('email');
    //     // $crud->mobile_number = $request->get('mobile_number');
    //     // $crud->subject = $request->get('subject');
    //     // $crud->message = $request->get('message');
    //     // $product->save();

    //     // return response()->json(['success'=>'Form is successfully Updated!']);

    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
