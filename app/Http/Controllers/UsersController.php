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
        $users = Poste::join('users', 'users.poste_id', '=', 'users.id')->select('users.*', 'postes.*')->get();
        //dd($poste);

        //$unites = Unite::all();
        return view('users.listeperso', compact('users'));

        //return view('/users/listeperso', ['users' => $users]);
    }
}
