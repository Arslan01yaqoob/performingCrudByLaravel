<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    // showing all clients 
    public function showclient()
    {
        $client = DB::table('clients')->get();
        // return $client;
        return view('welcome', ['data' => $client]);

    }
    // showing single clients
    public function singleclient(string $id)
    {
        $client = DB::table('clients')->where('id', $id)->get();
        // return $client;
        return view('singleClient', ['data' => $client]);
    }
    // inserting new clients
    public function addclient(Request $req)
    {
        $client = DB::table('clients')
            ->insert([
                'name' => $req->name,
                'lastname' => $req->lastname,
                'age' => $req->age,
                'city' => $req->city,
                'created_at' => now(),
                'updated_at' => now()

            ]);
        if ($client) {
            return redirect()->route('home');
        } else {
            echo "<h2>Data does not added something Went Wrong</h2>";
        }


    }
    // putting value in update form
    public function updatepage(string $id)
    {
        $client = DB::table('clients')->where('id', $id)->get();
        // return $client;
        return view('update', ['data' => $client]);


    }
    // updateing exsitingv user data
    public function updateuser(Request $req, $id)
    {
        $client = DB::table('clients')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'lastname' => $req->lastname,
                'age' => $req->age,
                'city' => $req->city,
                'updated_at' => now()

            ]);
        if ($client) {
            return redirect()->route('home');
        } else {
            echo "<h2>Data does not added something Went Wrong</h2>";
        }

    }
    // deleteing user by hitting id

    public function Deleteuser(string $id)
    {
        $client = DB::table('clients')
            ->where('id', $id)
            ->delete();
        if ($client) {

            return redirect()->route('home');
        }
        else{
            echo "<h2>Data does not Deleted something Went Wrong</h2>";

        }

    }

}
