<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $id= Auth::user()->id;
        $profile_data= User::find($id);
        $notification = array(
            'message' => 'You have successfully loged out ',
            'alert-type' => 'success'
        );
        return view('admin.index', compact('profile_data'))->with($notification);

    }

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logout successfully',
            'alert-type' => 'success'
        );

        return redirect('/admin/login')->with($notification);
    }

    public function AdminLogin(){
        $notification = array(
            'message' => 'You have successfully loged in ',
            'alert-type' => 'success'
        );
        return view('admin.admin_login')->with($notification);

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
        $notification = array(
            'message' => 'You profile updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

}
