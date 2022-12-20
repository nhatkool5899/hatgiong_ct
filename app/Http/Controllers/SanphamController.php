<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class SanphamController extends Controller
{
public function chitietsanpham($id_sanpham){
        // Tìm đến đối tượng muốn update
        $sanpham = Sanpham::findOrFail($id_sanpham);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('client.sanpham.chitietsanpham', compact('sanpham'));
    }
    public function datsachphansach(){
        $sanphams = Sanpham::where('loaisanpham', 'Đất sạch - Phân sạch')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', '=', 'Đất sạch - Phân sạch')->count();
        $sanphams->withPath('/loaisanpham/datsachphansach');
        return view ('client.sanpham.datsachphansach', compact('sanphams','count'));
    }
    public function hatgiongcayantrai(){
        $sanphams = Sanpham::where('loaisanpham', 'Hạt giống cây ăn trái')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống cây ăn trái')->count();
        $sanphams->withPath('/loaisanpham/hatgiongcayantrai');
        return view ('client.sanpham.hatgiongcayantrai', compact('sanphams','count'));
    }
    public function hatgiongrau(){
        $sanphams = Sanpham::where('loaisanpham', 'Hạt giống rau')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống rau')->count();
        $sanphams->withPath('/loaisanpham/hatgiongrau');
        return view ('client.sanpham.hatgiongrau', compact('sanphams','count'));
    }
    public function hatgiongraumam(){
        $sanphams = Sanpham::where('loaisanpham', 'Hạt giống rau mầm')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống rau mầm')->count();
        $sanphams->withPath('/loaisanpham/hatgiongraumam');
        return view ('client.sanpham.hatgiongraumam', compact('sanphams','count'));
    }
    public function hatgiongcacloaicu(){
        $sanphams = Sanpham::where('loaisanpham', 'Hạt giống các loại củ')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống các loại củ')->count();
        $sanphams->withPath('/loaisanpham/hatgiongcacloaicu');
        return view ('client.sanpham.hatgiongcacloaicu', compact('sanphams','count'));
    }
    public function hatgiongcacloaihoa(){
        $sanphams = Sanpham::where('loaisanpham', 'Hạt giống các loại hoa')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', '=', 'Hạt giống các loại hoa')->count();
        $sanphams->withPath('/loaisanpham/hatgiongcacloaihoa');
        return view ('client.sanpham.hatgiongcacloaihoa', compact('sanphams','count'));
    }
    public function hatgiong(){
        $sanphams = Sanpham::where('loaisanpham', 'like', '%'.'Hạt giống'.'%')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', 'like', '%'.'Hạt giống'.'%')->count();
        $sanphams->withPath('/loaisanpham/hatgiong');
        return view ('client.sanpham.hatgiong', compact('sanphams','count'));
    }
    public function chau(){
        $sanphams = Sanpham::where('loaisanpham', 'Chậu')->paginate(8);
        $count = DB::table('sanpham')->where('loaisanpham', '=', 'Chậu')->count();
        $sanphams->withPath('/loaisanpham/chau');
        return view ('client.sanpham.chau', compact('sanphams','count'));
    }
    public function sanpham()
    {
        $sanphams = Sanpham::all();
        return view('admin.sanpham.sanpham', compact('sanphams'));
    }

    public function ql_hatgiong()
    {
        $sanphams = Sanpham::where('id_danhmuc', 1)->get();
        return view('admin.sanpham.hatgiong', compact('sanphams'));
    }
    public function ql_datsach()
    {
        $sanphams = Sanpham::where('id_danhmuc', 2)->get();
        return view('admin.sanpham.datsach', compact('sanphams'));
    }
    public function ql_chau()
    {
        $sanphams = Sanpham::where('id_danhmuc', 3)->get();
        return view('admin.sanpham.chau', compact('sanphams'));
    }
    public function create(){
        return view('admin.sanpham.themsanpham');
    }

    public function store(Request $request){
        $sanpham = new Sanpham;
        $sanpham->tensanpham = $request->input('tensanpham');
        $sanpham->loaisanpham = $request->input('loaisanpham');

        if($request->hasfile('anhsanpham'))
        {
            $file = $request->file('anhsanpham');
            $filename = time() . '.' . $file->extension();
            $file->move('anhsanpham', $filename);
            $sanpham->anhsanpham = $filename;
        }
        $sanpham->motasanpham = $request->input('motasanpham');
        $sanpham->thongtinsanpham = $request->input('thongtinsanpham');
        $sanpham->giasanpham = $request->input('giasanpham');

        $sanpham->save();
        return redirect('/quanly/sanpham');
    }
    
    public function edit($id_sanpham){
        // Tìm đến đối tượng muốn update
        $sanpham = Sanpham::findOrFail($id_sanpham);
        
        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('admin.sanpham.suasanpham', compact('sanpham'));
    }

    public function update(Request $request, $id_sanpham){
        // Tìm đến đối tượng muốn update
        $sanpham = Sanpham::findOrFail($id_sanpham);
        $sanpham->tensanpham = $request->input('tensanpham');
        $sanpham->loaisanpham = $request->input('loaisanpham');
        if($request->hasFile('anhsanpham')){
            $des = 'anhsanpham/' . $sanpham->anhsanpham;
            File::delete($des);
            $file = $request->file('anhsanpham');
            $filename = time() . '.' . $file->extension();
            $file->move('anhsanpham', $filename);
            $sanpham->anhsanpham = $filename;
        }
        $sanpham->motasanpham = $request->input('motasanpham');
        $sanpham->thongtinsanpham = $request->input('thongtinsanpham');
        $sanpham->giasanpham = $request->input('giasanpham');
        $sanpham->update();
        return redirect('/quanly/sanpham');
    }
    public function delete($id_sanpham){
        // Tìm đến đối tượng muốn xóa
        $sanpham = Sanpham::findOrFail($id_sanpham);
        $des = 'anhsanpham/' . $sanpham->anhsanpham;
        if(File::exists($des)){
            File::delete($des);
        }
        $sanpham->delete();
        return redirect('/quanly/sanpham');
    }
}