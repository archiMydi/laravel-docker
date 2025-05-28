<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Public page : skills list
    public function index()
    {
        $skills = Skill::all();
        return view('pages.skills', compact('skills'));
    }

    // Back-office : skills list
    public function adminIndex()
    {
        $skills = Skill::all();
        return view('pages.admin.skills-admin', compact('skills'));
    }

    // Back-office : skill add
    public function edit()
    {
        return view('pages.admin.edit-skill-admin');
    }

    // Back-office : skill save
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:1|max:5'
        ]);

        Skill::create($validated);

        return redirect()->route('dashboard.skills.index')->with('success', 'Skill added successfully.');
    }

    // Back-office : skill delete
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('dashboard.skills.index')->with('success', 'Skill deleted successfully.');
    }
}
