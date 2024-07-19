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
    
        if ($this->request->getMethod() === 'post') {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $referid = $this->request->getPost('referid');
    
      
    
            $model = new UserModels();
            $dataToSave = [
                'name' => $name,
                'email' => $email,
                'referid' => $referid 
            ];
            // $model->insertUser($dataToSave);
            // echo $dataToSave;
            // exit;
            echo "<h1>Submitted Data:</h1>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Refer ID: $referid</p>";
    
            // return redirect()->to('/success');
        }
    
        return redirect()->to('/input-form');
    }
    public function Data()
    {   
        $fetchModel = new Cuted(); 
        $data['users'] = $fetchModel->findAll(); 
        return view('userdata', $data);
    }
}