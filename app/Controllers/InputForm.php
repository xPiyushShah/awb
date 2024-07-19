<?php

namespace App\Controllers;

use App\Models\UserModels;
use App\Models\Cuted;
use CodeIgniter\Controller;

class InputForm extends Controller
{
    public function index()
    {
        helper(['form']); 
        return view('input_form');
    }
    public function submitData()
    {
        helper(['form']);
    

        $json = $this->request->getJSON();
        
        $name = $json->name;
        $email = $json->email;
        $referid = $json->referid;
        $amount = $json->amount;

        
            $model = new UserModels();
            $dataToSave = [
                'name' => $name,
                'email' => $email,
                'referid' => $referid,
                'amount'=> $amount
            ];
            
            $model->insertUser($dataToSave);

            return $this->response->setStatusCode(200)->setJSON(['message' => 'Data saved successfully']);
           
        }   

    public function Data()
    {   
        $fetchModel = new Cuted(); 
        $data['users'] = $fetchModel->findAll(); 
        return view('userdata', $data);
    }
}