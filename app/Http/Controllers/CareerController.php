<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CareerController extends Controller
{
    public function index(): View
    {
        $careers = Career::all();

        return view('admin.careers.index', compact('careers'));
    }

    public function create(): View
    {
        return view('admin.careers.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $career = new Career;
        $career->category = $request->category;
        $career->position = $request->position;
        $career->short_description = $request->short_description;
        $career->description = $request->description;
        $career->location = $request->location;
        $career->experience = $request->experience;
        $career->package = $request->package;
        $career->skills = $request->skills;
        $career->status = $request->status == 1 ? 'Active' : 'Inactive';
        $career->save();

        return redirect(route('admin.careers.index'))->with('success', 'Career created successfully.');
    }

    public function edit(int $id): View
    {
        $career = Career::findOrFail($id);

        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $career = Career::findOrFail($id);
        $career->category = $request->category;
        $career->position = $request->position;
        $career->short_description = $request->short_description;
        $career->description = $request->description;
        $career->location = $request->location;
        $career->experience = $request->experience;
        $career->package = $request->package;
        $career->skills = $request->skills;
        $career->status = $request->status == 1 ? 'Active' : 'Inactive';
        $career->update();

        return redirect(route('admin.careers.index'))->with('success', 'Career updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect(route('admin.careers.index'))->with('success', 'Career deleted successfully.');
    }
}
