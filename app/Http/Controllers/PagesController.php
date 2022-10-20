<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;      //importing DB
use App\Models\User;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');

    }
    public function members(){
        $users = DB::select("select * from users");
        return view('members',['users'=>$users]);
    }

    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'address'=>$address);

        $insertion = DB::table('users')->insert($data);

        $request->validate([
            'password' => 'min:5',
            $confirm = 'password_confirmation' => 'required_with:password|same:password|min:5'
            ]);
        if($confirm == TRUE){
            return redirect('/');
        } else {
            return redirect('/register');
        }

        if ($insertion == TRUE) {
            return redirect('/');
        } else {
            return redirect('/register');
        }


   }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function login(){
        return view('pages.login');
    }

    public function register(Request $reg){
        $reg->validate([
        'password' => 'min:5',
        'password_confirmation' => 'required_with:password|same:password|min:5'
        ]);

        return view("pages.register");
        //return $reg->input();
    }

    public function users(Request $req){
        /*return view('users');
        $req->validate([
          'username'=>'required | max:20',
          'userpassword'=>'required | min:5'
        ]);

         return $req->input();*/

        /*$name = $req->get('name');
        $password = $req->get('password');
        $users = DB::table("users")
                ->select("select * from users")
                ->where('name', '=', $name && 'password', '=', $password);*/

        $device = User::find($req->name, $req->password);
        $name = $req->get('name');
        $password = $req->get('password');
        $users = DB::table("users")
                ->select("select * from users")
                ->where('name', '=', $name && 'password', '=', $password);
        if ($users) {
            return redirect('/');
        } else {
            echo 'You have entered wrong credentials';
            return redirect('/users');
        }

    }
}
