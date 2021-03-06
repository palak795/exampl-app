<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Models\Photo;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('jquery.create');

    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {


        //   $validator = Validator::make($request->all(), [
        //     'passsword' => 'required',
        //     'email' => 'required|email',
        //     'first_name' => 'required',
        //     'last_name' => 'required',

        // ]);

        // if ($validator->passes()) {

        //     return response()->json(['success'=>'Added new records.']);
            
        // }

        // return response()->json(['error'=>$validator->errors()]);


        $crud = new Photo;
        $crud->first_name = $request->get('first_name');
        $crud->last_name = $request->get('last_name');
        $crud->email = $request->get('email');
        $crud->password = $request->get('password');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
    
    $photos = Photo::find($id);
    
    $photos->delete();
  
    return response()->json([ 'success' => 'Record deleted successfully!' ]);

    }
}
