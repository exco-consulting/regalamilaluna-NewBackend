<?php

namespace App\Models;

use CodeIgniter\Model;

class Party extends Model
{
	protected $table      = 'party';
	protected $primaryKey = 'id';

	protected $useAutoIncrement = true;

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['type', 'name', 'surname', 'dob', 'email', 'phone', 'identityId'];

	protected bool $allowEmptyInserts = false;

	// Dates
	protected $useTimestamps = false;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_dt';
	protected $updatedField  = 'updated_dt';
	//protected $deletedField  = 'deleted_at';

	// Validation
	protected $validationRules = [
		'email'        	=> 'required|max_length[254]|valid_email|is_unique[party.email]',
		'name'     		=> 'required|max_length[255]',
		'surname' 		=> 'required|max_length[255]|',
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