<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{
    public function KiemTraXacThucNguoiDung(){ // nếu đã có phiên của user thì ko cho access vô admin
        $uid = Session::get('id');
        if($uid || $uid != ''){
            return Redirect::to('/')->send();
        }
    }
    // dang nhap 
    public function ViewDangNhap(){
        $this->KiemTraXacThucNguoiDung();
        return view('Admin.DangNhap');
    }

    public function DangNhap(Request $req){
        $data = array();

        $email = $req->email;
        // $password = md5($req->password); // md5 hash
        $password = ($req->password);

        $result = DB::table('admin')->where('email', $email)->where('password', $password)->where('is_active','1')->first();
        $result_check_banned_account = DB::table('admin')->where('email', $email)->where('password', $password)->where('is_active','0')->first();
        if($result){
            // Session::put('admin_id', $result->id);
            Session::put('admin_name', $result->name);
            Session::put('admin_email', $result->email);

            return Redirect::to('/admin/dashboard'); // login admin thanh cong
        }
        else if($result_check_banned_account){
            $msg = "Tài khoản này đã bị khóa";
            Session::put('message_ban_notify', $msg);
            return Redirect::to('/admin/dangnhap');
        }
        else{
            // Session::put('msg', 'Sai thông tin đăng nhập!');
            return Redirect::to('/admin/dangnhap');
        }

       // return Redirect::to('/');
    }

    //dang xuat
    public function DangXuat(){
        Session::flush();

        return Redirect::to('/admin/dangnhap');
    }
}