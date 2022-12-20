<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    // public function dangnhap(){
    //     return view ('admin.dangnhap');
    // }
    public function quanlydaily(){
        $dailys = Daily::all();
        return view('admin.daily.daily', compact('dailys'));
    }
    public function xoadaily($id_daily){
        // Tìm đến đối tượng muốn xóa
        $daily = Daily::findOrFail($id_daily);

        $daily->delete();
        return redirect('/quanly/daily');
    }
    public function daily(){
        return view('client.daily');
    }
    
    public function createdaily(){
        return view('client.daily');
    }

    public function storedaily(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Daily::create($data);
        return redirect('/daily');
    }
}
