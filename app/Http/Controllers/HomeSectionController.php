<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;

class HomeSectionController extends Controller
{
    public function onSelectVideo()
    {
        $videoSectionForHome = HomeModel::select('video_description', 'video_url')->get();
        return $videoSectionForHome;
    }

    public function onSelectTechnology()
    {
        $technologyForHome = HomeModel::select('technology_description')->get();
        return $technologyForHome;
    }

    public function onSelectClientProject()
    {
        $totalProjectClient = HomeModel::select('total_project', 'total_client')->get();
        return $totalProjectClient;
    }

    public function onSelectHomeTopSection()
    {
        $homeTopTitle = HomeModel::select('title', 'subtitle')->get();
        return $homeTopTitle;
    }
}
