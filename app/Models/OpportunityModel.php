<?php
namespace App\Models;
use CodeIgniter\Model;

class OpportunityModel extends Model{
    protected $table ='opportunity';
    protected $primaryKey ='id';
    protected $allowedFields =['name','amount','stage'];
}
