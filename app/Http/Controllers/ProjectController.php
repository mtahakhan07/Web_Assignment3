<?php

namespace App\Http\Controllers;

// app/Http/Controllers/ProjectController.php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; 

class ProjectController extends Controller
{
    // Show a list of projects
    public function index()
    {
        $projects = Project::all(); // Fetch all projects from the database
        return view('projects.index', compact('projects'));
    }

    // Show the project creation form
    public function create()
    {
        return view('projects.create');
    }

    // Store a new project
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Create a new project
        Project::create($validatedData);

        return redirect('/projects')->with('success', 'Project created successfully');
    }

    // Show the project edit form
    public function edit($id)
    {
        $project = Project::findOrFail($id); // Find the project by ID
        return view('projects.edit', compact('project'));
    }

    // Update an existing project
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Find the project by ID and update it
        $project = Project::findOrFail($id);
        $project->update($validatedData);

        return redirect('/projects')->with('success', 'Project updated successfully');
    }

    // Delete a project
    public function destroy($id)
    {
        // Find the project by ID and delete it
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('/projects')->with('success', 'Project deleted successfully');
    }
}
