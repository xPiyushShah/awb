<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table = 'fail'; // Corrected table name
    protected $primaryKey = 'user_id'; // Corrected primary key name
    protected $allowedFields = ['name', 'email', 'referid']; // Updated allowed fields

    public function insertUser($dataToSave)
    {
        return $this->insert($dataToSave); // Insert data into the database
    }
}
