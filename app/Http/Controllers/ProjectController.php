<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('pages.dashboard.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();

        $slug = Project::generateSlug($request->nome_progetto);

        $validatedData['slug'] = $slug;

        $new_project = Project::create($validatedData);

        return redirect()->route('dashboard.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('pages.dashboard.projects.edit', compact('project'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Project $project)
    {
        $validatedData = $request->validated();
    
        $slug = Project::generateSlug($validatedData['nome_progetto']);
    
        $validatedData['slug'] = $slug;
    
        $project->update($validatedData);
    
        return redirect()->route('dashboard.projects.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard.projects.index');
    }
}
