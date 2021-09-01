<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;

class HomeTopTitleController extends Controller
{
    public function onSelectAll()
    {
        $homeTopTitle = HomeModel::select('title', 'subtitle')->get();
        return $homeTopTitle;
    }
}
