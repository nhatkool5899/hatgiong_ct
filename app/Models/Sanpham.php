<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Sanpham extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'sanpham';
    protected $primaryKey ='id_sanpham';
    protected $fillable = [
        'tensanpham',
        'loaisanpham',
        'anhsanpham',
        'motasanpham',
        'thongtinsanpham',
        'giasanpham',
    ];
}