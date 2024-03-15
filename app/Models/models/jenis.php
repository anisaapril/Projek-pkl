<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    use HasFactory;

    protected $table = "jenis_bencana";
    //protected $primaryKey = "kode_jenis_bencana";
    static $rules = ['jenis_bencana' => 'required'];

    protected $perPage = 20;
    protected $fillable = ['kode_jenis_bencana', 'jenis_bencana'];
}
