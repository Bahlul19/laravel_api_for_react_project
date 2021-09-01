<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;

class TotalClientController extends Controller
{
    public function onSelectAll()
    {
        $totalProjectClient = HomeModel::select('total_project', 'total_client')->get();
        return $totalProjectClient;
    }
}
