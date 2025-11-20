<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(): View
    {
        $users = $this->getAllUsers();
        return view('user', ['users' => $users]);
    }


    public function getAllUsers()
    {
        $users = DB::select("SELECT * FROM User");
        return $users;
    }

    public function edit(): View
    {
        return view('edit');
    }

    public function create(): View
    {
        return view('create');
    }

    public function update(): View
    {
        $data = $_POST;
            DB::update("UPDATE User SET name = ?, lastname = ? WHERE id = ?", [
                $data['name'],
                $data['lastname'],
                $data['id']
            ]);
        return view('user', ['users' => $this->getAllUsers()]);
    }

    public function store(): View
    {
        $data = $_POST;
            DB::insert("INSERT INTO User (id, name, lastname) VALUES (?, ?, ?)", [
                $data['id'],
                $data['name'],
                $data['lastname']
            ]);
        return view('user', ['users' => $this->getAllUsers()]);
    }

    public function delete(): View
    { 
        $id = $_GET['id'];
            DB::delete("DELETE FROM User WHERE id = ?", [$id]);
        return view('user', ['users' => $this->getAllUsers()]);
    }

     public function pokemones()
    {
        $curl = curl_init();

         curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://pokeapi.co/api/v2/pokemon?limit=20',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);

        $pokemones = [];
        foreach($data['results'] as $index => $poke) {
            $pokemones[] = [
                'name' => $poke['name'],
                'image' => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/" . ($index + 1) . ".png"
            ];
        }

        
        return view('welcome', [
            'pokemones' => $pokemones
        ]);
    }
}

