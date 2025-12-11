<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //index
    public function index(Request $request)
    {
        //get user + pagination
        $users = DB::table('users')->when($request->search, function ($query) use ($request) {
            return $query->where('name', 'like', '%' . $request->search . '%');
        })->paginate(5);
        return view('pages.user.index', compact('users'));
    }

    //create
    public function create()
    {
        return view('pages.user.create');
    }

    //store
    public function store(Request $request)
    {
        //
    }

    //show
    public function show($id)
    {
        //
    }

    //edit
    public function edit($id)
    {
        //
    }

    //update
    public function update(Request $request, $id)
    {
        //
    }

    //destroy
    public function destroy($id)
    {
        //
    }
}
