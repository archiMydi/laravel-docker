<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Public page : projects list
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects', compact('projects'));
    }

    // Public page : project details
    public function show(Project $project)
    {
        return view('pages.project', compact('project'));
    }

    // Back-office : projects list
    public function adminIndex()
    {
        $projects = Project::all();
        return view('pages.admin.projects-admin', compact('projects'));
    }

    // Back-office : project creation
    public function edit()
    {
        return view('pages.admin.edit-project-admin');
    }

    // Back-office : project save
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url'
        ]);

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    // Back-office : project delete
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
