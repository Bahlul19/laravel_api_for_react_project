<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;

class TechnologyController extends Controller
{
    public function onSelectAll()
    {
        $technologyForHome = HomeModel::select('technology_description')->get();
        return $technologyForHome;
    }
}
