<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View{
        $users = $this->getAllUsers();
        return view('user',['users' => $users]);
    }

    public function getAllUsers(){
        $users = DB::select("SELECT * FROM User");
        return $users;
    }

    public function edit(): View{
        return view('edit');
    }

    public function update(): View{
        $data = $_POST;
        
        DB::update("UPDATE User SET name = ?, lastname =?  WHERE id = ?",[$data['name'], $data['lastname'], $data['id']]);

        return view('user', [ 'users' => $this->getAllUsers()]);
    }
}