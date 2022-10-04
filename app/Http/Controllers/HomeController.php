<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function json(){
        return Datatables::of(Post::all())->make(true);
    }

    public function index()
    {
        return view('pages.admin.dashboard');
    }

    public function changepassword()
    {
        return view('pages.admin.changepassword');
    }

    public function update(){

        request()->validate([
            'old_password' => 'required',
            'password'     => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');

        if(Hash::check($old_password, $currentPassword)){
            auth()->user()->update([
                'password' => bcrypt(request('password')),
            ]);
            session()->flash("success", "You are changed your password");
            return back()->with('success', 'You are changed your password');
        }else{
            session()->flash("error", "Make Sure You Fill Your Current Password");
            return back()->withErrors(['old_password' => 'Make Sure You Fill Your Current Password']);
        }
    }
}
