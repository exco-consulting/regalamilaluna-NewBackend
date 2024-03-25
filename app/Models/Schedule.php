<?php

namespace App\Models;

use CodeIgniter\Model;

class Schedule extends Model
{
	protected $table      = 'schedule';
	protected $primaryKey = 'id';

	protected $useAutoIncrement = true;

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['start_dt', 'end_dt', 'eventId', 'locationId'];

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