<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperienceRequest;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function create() {
        return view('work-experience.create');
    }

    public function store(WorkExperienceRequest $request)
    {
        $formData = $request->validated();

        return back()->with('success','Work Experience added successfully');
    }
}
