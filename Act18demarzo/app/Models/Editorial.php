<?php 
namespace App\Models;

use CodeIgniter\Model;

class Editorial extends Model{
    protected $table      = 'editoriales';
    protected $primaryKey = 'codigo_editorial';
    protected $allowedFields =['codigo_editorial','nombre','direccion','telefono','email'];
}