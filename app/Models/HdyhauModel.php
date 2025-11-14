<?php namespace App\Models;

use CodeIgniter\Model;

class HdyhauModel extends Model
{
    protected $table      = 'hdyhau';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

   // protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['bloc', 'type', 'code', 'fr', 'en'];
}