<?php

namespace App\Controllers;

use App\Models\UserModels;
use CodeIgniter\Controller;

class InputForm extends Controller
{
    public function index()
    {
        helper(['form']); // Load form helper here
        return view('input_form');
    }
    public function submitData()
    {
        helper(['form']); // Load form helper here if not already loaded
    
        if ($this->request->getMethod() === 'post') {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $referid = $this->request->getPost('referid');
    
            // $validation = \Config\Services::validation();
            // // Set validation rules
            // $validation->setRules([
            //     'name' => 'required|min_length[3]|max_length[50]',
            //     'email' => 'required|valid_email|max_length[100]',
            //     'referid' => 'permit_empty|min_length[3]' // Allow referid to be empty but validate if provided
            // ]);
    
            // if (!$validation->run(['name' => $name, 'email' => $email])) {
            //     // If validation fails, reload the form with validation errors
            //     $data['validation'] = $validation;
            //     return view('input_form', $data);
            // }
    
            $model = new UserModels();
            $dataToSave = [
                'name' => $name,
                'email' => $email,
                'referid' => $referid // It's okay if referid is empty if 'permit_empty' is set
            ];
    
            $model->insertUser($dataToSave);
            echo 'Data inserted successfully!';
            // Redirect to success page after successful insertion
            return redirect()->to('/success');
        }
    
        // Redirect to form page if not submitted via post method
        return redirect()->to('/input-form');
    }
}