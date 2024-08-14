<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $table = 'professores';

    protected $primaryKey = 'Id_Professor';
    protected $fillable = [
        'Nome',
        'CPF',
        'Nascimento',
        'Telefone',
        'Formacao',
        'Token',
        'Email',
        'Senha',
        'Foto',
    ];
        public function getCapaUrlAttribute(){
         //Verifica se o atributo 'capa' existe
         if($this->Foto){
              //Retorna a URL completa da imagem da capa usando a função 'asset'
         // 'storage/' é o caminho onde as imagens são armazenadas no Laravel
             return asset('storage/' . $this->fotos);
         }
         // Retorna null se não houver uma imagem de capa associada
         return null;
     }
}
