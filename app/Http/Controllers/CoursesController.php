<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoursesModel;

class CoursesController extends Controller
{
    public function onSelectForHome()
    {
        $selectDataForHome = CoursesModel::limit(4)->get();
        return $selectDataForHome;
    }

    public function onSelectAll()
    {
        $selectDataForAll = CoursesModel::all();
        return $selectDataForAll;
    }

    public function onSelectDetails(Request $request)
    {
        $id = $request->input('id');
        $selectDataForIndividualCourse =  CoursesModel::where(['id' => $id])->get();
        return $selectDataForIndividualCourse;
    }
}
