<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $sanphams = Sanpham::all();
        $countdat = DB::table('sanpham')->where('loaisanpham', '=', 'Đất sạch - Phân sạch')->count();
        $countantrai = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống cây ăn trái')->count();
        $countrau = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống rau')->count();
        $countraumam = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống rau mầm')->count();
        $countcu = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống các loại củ')->count();
        $counthoa = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống các loại hoa')->count();
        $countchau = DB::table('sanpham')->where('loaisanpham', '=', 'Chậu')->count();

        return view ('client.content', compact('sanphams','countdat','countantrai','countrau','countraumam','countcu','counthoa','countchau'));
    }
    public function timkiem(Request $request){
        // Get the search value from the request
        $search = $request->input('tu-khoa');
        // Search in the title and body columns from the posts table
        $results = Sanpham::query()
            ->where('tensanpham', 'LIKE', "%{$search}%")
            ->orWhere('loaisanpham', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('client.timkiem', compact('results','search'));
    }
    public function gioithieu(){
        return view('client.gioithieu');
    }
}
