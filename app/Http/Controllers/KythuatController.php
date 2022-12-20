<?php

namespace App\Http\Controllers;

use App\Models\Kythuat;
use App\Models\Sanpham;
use Illuminate\Http\Request;
use DB;

class KythuatController extends Controller
{
    
    public function kythuat(){
        $kythuats = Kythuat::all();
        $count = DB::table('kythuat')->count();
        return view ('client.kythuatnuoitrong.kythuatnuoitrong', compact('kythuats','count'));
    }
    public function xemkythuat($id_kythuat){
        // Tìm đến đối tượng muốn update
        $kythuat = Kythuat::findOrFail($id_kythuat);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('client.kythuatnuoitrong.xemkythuat', compact('kythuat'));
    }
    public function quanlykythuat(){
        $kythuats = Kythuat::all();
        return view ('admin.kythuatnuoitrong.kythuat', compact('kythuats'));
    }
    public function create(){
        return view('admin.kythuatnuoitrong.themkythuat');
    }

    public function store(Request $request){
        $kythuat = new Kythuat;
        $kythuat->tieude = $request->input('tieude');
        $kythuat->noidung = $request->input('noidung');

        $kythuat->save();
        return redirect('/quanly/kythuat');
    }
    
    public function edit($id_kythuat){
        // Tìm đến đối tượng muốn update
        $kythuat = Kythuat::findOrFail($id_kythuat);
        
        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('admin.kythuatnuoitrong.suakythuat', compact('kythuat'));
    }

    public function update(Request $request, $id_kythuat){
        // Tìm đến đối tượng muốn update
        $kythuat = Kythuat::findOrFail($id_kythuat);
        $kythuat->tieude = $request->input('tieude');
        $kythuat->noidung = $request->input('noidung');
        $kythuat->update();
        return redirect('/quanly/kythuat');
    }
    public function delete($id_kythuat){
        // Tìm đến đối tượng muốn xóa
        $kythuat = Kythuat::findOrFail($id_kythuat);
        $kythuat->delete();
        return redirect('/quanly/kythuat');
    }
    
}

?>