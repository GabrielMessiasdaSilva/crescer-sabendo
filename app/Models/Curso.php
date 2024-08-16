<?php

namespace App\Models;
// app/Models/Curso.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $primaryKey = 'Id_Curso';
    protected $foreignKey = 'Id_Professor';

    
    protected $fillable = [
        'Id_Curso', 'Nome', 'Duracao', 'Id_Professor', 'Itens_Aula', 'Sobre', 'Dias', 'Foto'
    ];
}
