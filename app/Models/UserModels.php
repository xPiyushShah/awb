<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table = 'fail'; 
    protected $primaryKey = 'user_id'; 
    protected $allowedFields = ['name', 'email', 'referid','amount', 'wallet']; 

    public function insertUser($data)
    {
        return $this->insert($data); 
    }
}
