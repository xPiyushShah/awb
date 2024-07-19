<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Home extends BaseController
{
    public function index() {
        return view("registration_form");
    }
    public function confirm()
    {
        helper('form');
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'name' => 'required|min_length[4]|max_length[20]',
                'email' => 'required|min_length[8]|max_length[50]|valid_email',
                'refer_id' => 'permit_empty|min_length[2]'
            ];

            if ($this->validate($rules)) {
                // Validation passed
                $model = new AdminModel();

                $newData = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'refer_id' => $this->request->getVar('refer_id')
                ];

                $model->save($newData);

                return redirect()->to('/success'); // Redirect to success page
            } else {
                // Validation failed
                $data['validation'] = $this->validator;
            }
        }

        return view('main', $data); // Render the main.php view with validation errors if any
    }
}
