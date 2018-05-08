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

        $users = Poste::join('users', 'users.poste_id', '=', 'postes.id')->select('users.*', 'postes.*')->get();
          
        return view('users.listeperso', compact('users'));
    }

    public function show(User $users)
    {
        $user = Reactif::where('id', $user->id)->first();
        return view('users.personnel', ['user'=>$user]);
    }
}