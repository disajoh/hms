<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public  function index(){
        
        $users = User::all();

        return view('users.index', compact('users'));
    }


    public  function create(){
        
    }

    public  function store(User $user){
        
    }

    public  function show(User $user){
        
    }

    public  function edit(User $user){
        
    }

    public  function update(User $user){
        
    }

    public  function delete(User $user){
        
    }
}
