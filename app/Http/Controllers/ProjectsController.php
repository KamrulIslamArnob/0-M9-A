<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{
    public function index()
    {
        // Fetch and pass projects data if using a database
        $projects = []; // Replace with your actual data

        return view('projects', compact('projects'));
    }
}

