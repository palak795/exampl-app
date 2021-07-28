<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //step 1
        // $project = new Project;
        // $project->project_name = $request->project_name;
        // $project->project_password = $request->project_password;
        // $project->project_time = $request->project_time;
        // $project->project_tags = implode(',', $request->project_tags);

        // if ($request->has('project_file')) {
            
        //     $fileName = time().'.'.$request->project_file->extension();  
            
        //     $request->project_file->move(public_path('uploads'), $fileName);
            
        //     $project->project_file = $fileName;
        // }

        // $project->save();    
        
        // return redirect()->route('projects.index')->withSuccess('Record created successfully');

        if ($request->has('project_file')) {
            
            $fileName = time().'.'.$request->project_file->extension();  
            
            $request->project_file->move(public_path('uploads'), $fileName);
        }

        Project::create([
            'project_name' => $request->project_name,
            // 'project_password' => bcrypt($request->project_password),
            'project_password' => \Hash::make($request->project_password),
            'project_time' => $request->project_time,
            'project_tags' => implode(',', $request->project_tags),
            'project_file' => $fileName,
        ]);

        return redirect()->route('projects.index')->withSuccess('Record created successfully');        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
