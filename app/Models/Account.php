<?php

namespace App\Models;

use CodeIgniter\Model;

class Account extends Model
{
	protected $table      = 'account';
	protected $primaryKey = 'id';

	protected $useAutoIncrement = true;

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['username', 'psw', 'type', 'externalId', 'partyId'];

	protected bool $allowEmptyInserts = false;

	// Dates
	protected $useTimestamps = false;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_dt';
	protected $updatedField  = 'updated_dt';
	//protected $deletedField  = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
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