<?php

namespace App\Controllers;

use App\Models\cuted;

class DataController extends BaseController
{
    public function data()
    {
        $cutedModel = new cuted();
        $data['users'] = $cutedModel->findAll(); 

    
        return view('userdata', $data);
    }
}
