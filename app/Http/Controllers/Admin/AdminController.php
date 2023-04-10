<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class AdminController extends Controller
{ 
    public function index()
    { 
        $chats = Chat::selectRaw("ip_address, COUNT(*) AS count")->groupBy("ip_address")->paginate(10);
        return view('Admin.dashboard',compact('chats'));
    }
    public function login()
    {
        return view('Admin.login');
    }

    public function adminlogin(Request $request)
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password'=> $request->password],$request->get('remember')))
        {
            return redirect('admin/dashboard');
        }else{
            session()->flash('error','Either Email/Passowrd is incorrect');
            return back()->withInput($request->only('email'));
        }

    }
    public function logoutAdmin(){
        Session::flush();
        Auth::logout();
        return redirect('admin/login');

    }

    public function changePass()
    {
        $admin = Admin::all();
        return view('Admin.change-password');
    }
    
    public function  changePassPost(Request $request,Admin $admin)
    {    
        $request->validate([
            'old_password' => ['required', function ($attribute, $value, $fail) use ($admin) {
                if (!Hash::check($value, $admin->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'new_password' => 'required',
            'confirm_password' => 'same:new_password'
        ]);
        
        Admin::find($admin->id)->update(['password'=> Hash::make($request->new_password)]);

        Admin::find($admin->id)->update(['password_changed_at'=> date('Y-m-d: H:i:s')]);

        return redirect()->back()->with('success','Password Change Successfully');
    }

    public function RegUsers()
    {
       $users = User::all();
       return view('Admin.users',compact('users'));
    }

    public function blockusers(Request $request)
    {
        
    }
}


