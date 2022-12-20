<?php

namespace App\Http\Controllers;

use App\Models\Lienhe;
use Illuminate\Http\Request;

class LienheController extends Controller
{
public function quanlylienhe(){
        $lienhes = Lienhe::all();
        return view('admin.lienhe.lienhe', compact('lienhes'));
    }
    public function xoalienhe($id_lienhe){
        // Tìm đến đối tượng muốn xóa
        $lienhe = Lienhe::findOrFail($id_lienhe);

        $lienhe->delete();
        return redirect('/quanly/lienhe');
    }
    public function lienhe(){
        return view('client.lienhe');
    }
    public function create(){
        return view('client.lienhe');
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Lienhe::create($data);
        return redirect('/lienhe');
    }
}   
?>