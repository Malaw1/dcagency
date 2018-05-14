<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unite;
use App\Poste;

class UsersController extends Controller
{
    public function index()
    {
        // $user = 
        // User
        //   ::join('postes', 'postes.user_id', '=', 'users.id')
        //   ->where('postes.id', 'LIKE', '%1%')
        //   ->first(); 
        //   dd($user);

//         $user = 
//   User
//     ::join('posts', 'posts.user_id', '=', 'users.id')
//     ->where('posts.name', 'LIKE', '%jp%')
//     ->select('users.*')
//     ->first(); 

        //   $users = Poste::join('users', 'users.poste_id', '=', 'postes.id')->select('users.*', 'postes.*')->get();
        //   //dd($users);
        // //$unites = Unite::all();
        // return view('users.listeperso', compact('users'));

        $users = User::get();

     
        
        
        //$users = Poste::join('users', 'users.poste_id', '=', 'postes.id')->select('users.*', 'postes.*')->get();
          
        return view('users.index', compact('users'));
    }

    public function show(User $users)
    {
        //$users = User::where('users.id', $users->id)->first();
        $users = User::Where('id', $users->id)->get();
        dd($users);
        return view('users.show', ['users'=>$users]);
    }
}