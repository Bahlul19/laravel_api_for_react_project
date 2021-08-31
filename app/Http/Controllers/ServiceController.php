<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceModel;

class ServiceController extends Controller
{
    public function onSelectAll()
    {
        $selectDataForServices = ServiceModel::all();
        return $selectDataForServices;
    }
}
