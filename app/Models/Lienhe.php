<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Lienhe extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'lienhe';
    protected $primaryKey = 'id_lienhe';
    protected $fillable = [
        'hovaten',
        'email',
        'diachi',
        'sodienthoai',
        'noidung',
    ];
}
