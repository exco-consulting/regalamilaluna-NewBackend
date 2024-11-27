<?php

namespace App\Models;

use CodeIgniter\Model;

class Partymodel extends Model
{
	protected $table      = 'party';
	protected $primaryKey = 'id';
	
	protected $useAutoIncrement = true;
	
	protected $returnType     = 'object';
	protected $useSoftDeletes = true;
	
	protected $allowedFields = ['fullName', 'email', 'type', 'VATid', 'fullAddress', 'status'];
	
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
		'fullName'     => 'required|max_length[30]|alpha_numeric_space|min_length[3]',
		'email'        => 'required|max_length[254]|valid_email|is_unique[party.email]',
	];
	protected $validationMessages = [
		'email' => [
			'is_unique' => 'Sorry. That email has already been taken. Please choose another.',
		],
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