<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CRUD extends Controller
{
    


    public function getUsers()
    {
        $users = etudiant::all();
        return view("users", ["users" => $users]);
    }

    public function addForm()
    {
        return view("addForm");
    }

    public function addUser(Request $req)
    {
        $login = $req->input("login");
        $pwd = $req->input("pwd");

        $et = new etudiant;
        $et->nom = $login;
        $et->age = $pwd;

        $et->save();

        return redirect('/');
    }

    public function deleteUser(Request $req)
    {
        $id = $req->input("id");

        $user = etudiant::find($id);
        $user->delete();

        return redirect('/');
    }

    public function updateUserForm(Request $req)
    {
        $id = $req->input("id");
        
        $user = etudiant::find($id);

        return view("updateUserForm", ["user" => $user, "id" => $id]);
    }

    public function updateUser(Request $req)
    {
        $id = $req->input("id");
        $new_login = $req->input("new_login");
        $new_pwd = $req->input("new_pwd");

        $user = etudiant::find($id);

        $user->nom = $new_login;
        $user->age = $new_pwd;

        $user->save();

        return redirect('/');
    }



}
