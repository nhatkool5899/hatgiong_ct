<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Daily extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'daily';
    protected $primaryKey = 'id_daily';
    protected $fillable = [
        'hovaten',
        'email',
        'diachi',
        'sodienthoai',
        'noidung',
    ];
}
