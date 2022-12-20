<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Cuahang extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'cuahang';
    protected $primaryKey = 'id_cuahang';
    protected $fillable = [
        'tencuahang',
        'diachi',
        'email',
        'sodienthoai',
    ];
}
