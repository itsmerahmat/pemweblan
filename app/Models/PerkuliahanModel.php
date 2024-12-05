<?php

namespace App\Models;

use CodeIgniter\Model;

class PerkuliahanModel extends Model
{
    protected $table            = 'perkuliahan';
    protected $primaryKey       = 'Id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Id',
        'Nim',
        'Nip',
        'Kode_MK',
        'Nilai',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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

    public function getAllData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        return $builder->get()->getResult();
    }

    public function insertData($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        return $builder->insert($data);
    }

    public function getDataById($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        $builder->where('Id', $id);
        return $builder->get()->getRow();
    }

    public function updateData($id, $data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        $builder->where('Id', $id);
        return $builder->update($data);
    }

    public function deleteData($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        $builder->where('Id', $id);
        return $builder->delete();
    }
}
