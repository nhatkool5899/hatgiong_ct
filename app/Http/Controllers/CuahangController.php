<?php

namespace App\Http\Controllers;

use App\Models\Cuahang;
use Illuminate\Http\Request;

class CuahangController extends Controller
{
    public function hethongcuahang(){
        $cuahangs = cuahang::all();
        return view ('client.hethongcuahang', compact('cuahangs'));
    }
    
}
?>