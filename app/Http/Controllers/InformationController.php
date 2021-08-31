<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationModel;

class InformationController extends Controller
{
    public function onSelectAll()
    {
        $selectDataForInformation = InformationModel::all();
        return $selectDataForInformation;    
    }
}
