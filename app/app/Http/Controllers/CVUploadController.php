<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CVUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|file|mimes:pdf|max:2048',
        ]);

        $path = $request->file('cv')->store('cvs', 'public');

        // Optionally store path in DB:
        // auth()->user()->update(['cv_path' => $path]);

        return back()->with('success', 'CV uploaded successfully.');
    }
}
