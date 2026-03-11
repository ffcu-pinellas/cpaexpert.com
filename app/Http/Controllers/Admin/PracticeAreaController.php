<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = \App\Models\PracticeArea::latest()->paginate(10);
        return view('admin.practice-areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.practice-areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:practice_areas',
            'icon' => 'nullable|string',
            'short_description' => 'nullable|string|max:500',
            'content' => 'nullable|string',
        ]);

        \App\Models\PracticeArea::create($validated);

        return redirect()->route('practice-areas.index')->with('success', 'Practice area added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\PracticeArea $practice_area)
    {
        return view('admin.practice-areas.edit', compact('practice_area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request, \App\Models\PracticeArea $practice_area)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:practice_areas,slug,' . $practice_area->id,
            'icon' => 'nullable|string',
            'short_description' => 'nullable|string|max:500',
            'content' => 'nullable|string',
        ]);

        $practice_area->update($validated);

        return redirect()->route('practice-areas.index')->with('success', 'Practice area updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\PracticeArea $practice_area)
    {
        $practice_area->delete();
        return redirect()->route('practice-areas.index')->with('success', 'Practice area deleted successfully.');
    }
}
