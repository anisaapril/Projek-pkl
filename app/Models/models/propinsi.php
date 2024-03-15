<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propinsi extends Model
{
    use HasFactory;
    protected $table = "propinsi";
    static $rules = ['nama_propinsi' => 'required'];
    protected $primaryKey = "kode_propinsi";
    protected $perPage = 20;
    protected $fillable = ['kode_propinsi', 'nama_propinsi'];
}
