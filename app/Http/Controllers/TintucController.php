<?php

namespace App\Http\Controllers;

use App\Models\Tintuc;
use Illuminate\Http\Request;
use DB;

class TintucController extends Controller
{
    public function tintuc(){
        $tintucs = Tintuc::all();
        $count = DB::table('tintuc')->count();
        return view ('client.tintuc.tintuc', compact('tintucs','count'));
    }
    public function xemtintuc($id_tintuc){
        // Tìm đến đối tượng muốn update
        $tintuc = Tintuc::findOrFail($id_tintuc);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('client.tintuc.xemtintuc', compact('tintuc'));
    }
    public function quanlytintuc(){
        $tintucs = Tintuc::all();
        return view ('admin.tintuc.tintuc', compact('tintucs'));
    }
    public function create(){
        return view('admin.tintuc.themtintuc');
    }

    public function store(Request $request){
        $tintuc = new Tintuc;
        $tintuc->tieude = $request->input('tieude');
        $tintuc->noidung = $request->input('noidung');

        $tintuc->save();
        return redirect('/quanly/tintuc');
    }
    
    public function edit($id_tintuc){
        // Tìm đến đối tượng muốn update
        $tintuc = Tintuc::findOrFail($id_tintuc);
        
        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('admin.tintuc.suatintuc', compact('tintuc'));
    }

    public function update(Request $request, $id_tintuc){
        // Tìm đến đối tượng muốn update
        $tintuc = Tintuc::findOrFail($id_tintuc);
        $tintuc->tieude = $request->input('tieude');
        $tintuc->noidung = $request->input('noidung');
        $tintuc->update();
        return redirect('/quanly/tintuc');
    }
    public function delete($id_tintuc){
        // Tìm đến đối tượng muốn xóa
        $tintuc = Tintuc::findOrFail($id_tintuc);
        $tintuc->delete();
        return redirect('/quanly/tintuc');
    }
    
}
?>