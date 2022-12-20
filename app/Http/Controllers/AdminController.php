<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    // public function dangnhap(){
    //     return view ('admin.dangnhap');
    // }
    public function quanly(){
        $countSanpham = DB::table('sanpham')->count();
        $countTintuc = DB::table('tintuc')->count();
        $countKythuat = DB::table('kythuat')->count();
        $countLienhe = DB::table('lienhe')->count();
        $countDaily = DB::table('daily')->count();
        return view ('admin.quanly',compact('countSanpham','countTintuc','countKythuat','countLienhe','countDaily'));
    }

}
