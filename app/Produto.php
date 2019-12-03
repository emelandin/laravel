<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produto";
    protected $primaryKey = "id";
    protected $fillable = [
        "nome_produto", "descricao_produto", "tipo_produto","imagem_produto", "user_id"
    ];

    public function user(){
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function getAvatarImageAttribute($value) {
        return $this->imagem_produto == null ? asset('img/null.png') : asset($this->imagem_produto);
    }
}