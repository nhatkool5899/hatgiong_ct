<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Tintuc extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tintuc';
    protected $primaryKey ='id_tintuc';
    protected $fillable = [
        'tieude',
        'noidung',
    ];
}