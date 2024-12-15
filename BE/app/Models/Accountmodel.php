<?php

namespace App\Models;

use CodeIgniter\Model;

class Accountmodel extends Model
{
	protected $table      = 'account';
	protected $primaryKey = 'id';
	
	protected $useAutoIncrement = true;
	
	protected $returnType     = 'object';
	protected $useSoftDeletes = true;
	
	protected $allowedFields = ['partyId', 'username', 'psw', 'authType'];
	
	protected bool $allowEmptyInserts = false;
	protected bool $updateOnlyChanged = true;
	
	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	
	// Validation
	protected $validationRules = [

	];
	protected $validationMessages = [

	];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
	
	// Callbacks
	protected $allowCallbacks = true;
	protected $beforeInsert   = [];
	protected $afterInsert    = [];
	protected $beforeUpdate   = [];
	protected $afterUpdate    = [];
	protected $beforeFind     = [];
	protected $afterFind      = [];
	protected $beforeDelete   = [];
	protected $afterDelete    = [];
}