<?php

namespace App\Models;

use CodeIgniter\Model;

class HeroeModelo extends Model
{
    protected $table = 'personajes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'descripcion', 'foto'];
}