<?php
namespace App\Models;

use CodeIgniter\Model;

class IngresoModel extends Model
{
    protected $table      = 'ingreso';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; //No retorna registros cuando es true

    protected $allowedFields = ['id','correo','contrasena','id_privilegio','token']; //Campos manipulables

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
    protected $deletedField  = 'eliminado';

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