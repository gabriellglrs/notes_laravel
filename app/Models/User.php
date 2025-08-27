<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


/**
 *
 */
class User extends Model
{
    use HasFactory, SoftDeletes;

    // Define a chave primária como UUID
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;

    // Colunas que podem ser preenchidas em massa
    protected $fillable = ['uuid', 'email', 'password', 'last_login'];

    // Gera automaticamente o UUID ao criar
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid();
            }
        });
    }

    public function notes()
    {
        return $this->hasMany(Note::class, 'user_uuid', 'uuid');
    }
}
