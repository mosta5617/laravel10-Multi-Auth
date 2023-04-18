<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');

    }

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin(){
        return view('admin.admin_login');

    }

    public function AdminProfile(){
        $id= Auth::user()->id;
        $profile_data= User::find($id);
        return view('admin.admin_profile_view', compact('profile_data'));   
    }

    public function AdminProfileStore(Request $request){
        $id= Auth::user()->id;
        $data= User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file=$request->file('photo');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin-images'),$filename);
            $data['photo']=$filename;
        }

        $data->save();
        return redirect()->back();

    }

}
