<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => ['string', 'required', 'max:255'],
            'email' => ['email', 'required', 'max:255', 'string', 'unique:users'],
            'cpf' => ['required', 'max:14', 'unique:users'],
            'birthdate' => ['date'],
            'phone' => ['max:25']
        ]);

        if ($validator->fails()) {
            return redirect()->route('patients.create')
                ->withErrors($validator)
                ->withInput();
        }

        $password = Hash::make($data['email']);
        $data['password'] = $password;

        User::create($data);

        return redirect()->route('patients.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
