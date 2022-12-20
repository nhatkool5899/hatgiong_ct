<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getdangnhap()
    {
        return view('admin.dangnhap');
    }

    public function postdangnhap(Request $request)
    {
        $this->validate($request, [
            'email' => 'required', 'password' => 'required'
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/quanly');
        } else {
            return redirect('/dangnhap')->with('thongbao', 'Đăng nhập không thành công');
        }
    }
    public function dangxuat()
    {
        Auth::logout();
        return redirect('/dangnhap')->with('thongbao', 'Đăng xuất thành công');
    }
    public function editnguoidung($id_user){
        // Tìm đến đối tượng muốn update
        $nguoidung=Auth::user()->id_user;

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('admin.nguoidung.suanguoidung', compact('nguoidung'));
    }

    public function updatenguoidung(Request $request, $id_user){
        // Tìm đến đối tượng muốn update
        $nguoidung = User::findOrFail($id_user);
        $nguoidung->email = $request->input('email');
        $nguoidung->name = $request->input('name');
        if($request->hasFile('avatar')){
            $des = 'anhnguoidung/' . $nguoidung->avatar;
            File::delete($des);
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->extension();
            $file->move('anhnguoidung', $filename);
            $nguoidung->avatar = $filename;
        }
        // gán dữ liệu gửi lên vào biến data
        $nguoidung->update();
        return redirect('/quanly');
    }
}
