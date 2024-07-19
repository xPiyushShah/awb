<?php

namespace App\Models;

use CodeIgniter\Model;

class Cuted extends Model
{
    protected $table      = 'fail';
    protected $primaryKey = 'user_id'; 
    protected $allowedFields = [ 'name', 'amount', 'referid']; 

    public function __construct()
    {
        parent::__construct();
    }
}
