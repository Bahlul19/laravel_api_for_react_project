<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;

class VideoController extends Controller
{
    public function onSelectAll()
    {
        $videoSectionForHome = HomeModel::select('video_description', 'video_url')->get();
        return $videoSectionForHome;
    }
}
