<?php

namespace App\Models;

use CodeIgniter\Model;

class Cuted extends Model
{
    protected $table      = 'fail';
    protected $primaryKey = 'user_id'; 
    protected $allowedFields = [ 'name', 'referid','amount', 'wallet']; 

    public function __construct()
    {
        parent::__construct();
    }
}
