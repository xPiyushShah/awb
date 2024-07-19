<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "fail";
    protected $allowedFields = ["name", "amount", "refer_id"]; 
     protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $primaryKey = "user_id";

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        $data['created_at'] = date('Y-m-d H:i:s'); 
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        $data['updated_at'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}
