<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    protected $table = 'bencana';
    //protected $primaryKey = 'kode_bencana';
    static $rules = ['nama_bencana' => 'required','kode_bencana' => 'required'];
    protected $perPage = 20;
    protected $fillable = ['kode_bencana', 'nama_bencana'];
}
