<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectIndexResource;
use App\Http\Resources\ProjectShowResource;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(Category $category)
    {
        $projects = Project::query()
            ->where('category_id', $category->id)
            ->get();
        return ProjectIndexResource::collection($projects);
    }

    public function show(Project $project)
    {
        $project->load('prices.size');

        return new ProjectShowResource($project);
    }
}
