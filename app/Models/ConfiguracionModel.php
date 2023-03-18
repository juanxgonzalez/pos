<?php 
namespace App\Models;
use CodeIgniter\Model;  
class ConfiguracionModel extends Model
{
    protected $table = 'configuracion';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'valor']; 
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $useSoftUpdates = false;
    protected $useSoftCreates = false;
    protected $useTimestamps = true;
    protected $createdField = 'fecha_alta';
    protected $updatedField = 'fecha_edit';
    protected $deletedField = 'deleted_at';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}






?>