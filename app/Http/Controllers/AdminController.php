<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    } // End AdminDashboard method

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logout successfully',
            'alert-type' => 'success'
        );

        return redirect('/admin/login')->with($notification);

    } // End AdminLogout method


    public function AdminLogin(){
        $notification = array(
            'message' => 'You have successfully loged in ',
            'alert-type' => 'success'
        );
        return view('admin.admin_login')->with($notification);

    } // End AdminLogin method

    public function AdminProfile(){
        $id= Auth::user()->id;
        $profile_data= User::find($id);
        return view('admin.admin_profile_view', compact('profile_data'));   

    } // End AdminProfile method

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

            @unlink(public_path('upload/admin-images/'. $data->photo));

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

    } // End AdminProfileStore method


    public function AdminPassword(){
        $id= Auth::user()->id;
        $profile_data= User::find($id);
        return view('admin.admin_change_password', compact('profile_data'));

    } //End AdminPassword method


    public function AdminPasswordStore(Request $request)
    {
        $validated = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Match the old password
        if(!Hash::check($request->old_password, Auth::user()->password )){
            $notification = array(
                'message' => 'Old Password not Matched',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        // Update the new password

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

            $notification = array(
                'message' => 'Password Changed Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
 
    } //End AdminPasswordStore method


    public function AdminPicture(){

        return view('admin.admin_picture');

    } //End AdminPicture method
    

} //End AdminController Class
