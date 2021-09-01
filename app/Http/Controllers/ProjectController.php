<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;

class ProjectController extends Controller
{
    public function onSelectHome()
    {
        $selectDataForHome = ProjectModel::limit(3)->get();
        return $selectDataForHome;
    }

    public function onSelectAll()
    {
        $selectDataForAll = ProjectModel::all();
        return $selectDataForAll;
    }

    public function onSelectDetails(Request $request)
    {
        $id = $request->input('id');
        $selectDataForIndividualProject = ProjectModel::where(['id' => $id])->get();
        return $selectDataForIndividualProject;
    }
}
