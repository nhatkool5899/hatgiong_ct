<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Kythuat extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'kythuat';
    protected $primaryKey ='id_kythuat';
    protected $fillable = [
        'tieude',
        'noidung',
    ];
}