<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        // $projects= Project::all();
        $projects= Project::with('type', 'technologies')->paginate(3);
        return response()->json([
            'status'=>true,
            'results'=> $projects
        ]);
    }
}
