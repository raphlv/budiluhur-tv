<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = $request->query('category');
        $query = Program::with('category');

        if ($categorySlug) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        $programs = $query->latest()->paginate(6);
        $categories = Category::all();

        return view('programs.index', compact('programs', 'categories', 'categorySlug'));
    }

    public function show($slug)
    {
        $program = Program::with(['category', 'videos'])->where('slug', $slug)->firstOrFail();
        $relatedPrograms = Program::where('id', '!=', $program->id)->take(3)->get();

        return view('programs.show', compact('program', 'relatedPrograms'));
    }
}
