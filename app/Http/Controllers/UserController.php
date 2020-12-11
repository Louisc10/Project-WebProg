<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->inputEmail;
        $password = $request->inputPassword;
        $remember = $request->checkRememberMe;
        $minutes = 2*60;
        if ($remember != null)
        {
            $remember = true;
        }
        else
        {
            $remember = false;
        }
        $users = Auth::attempt(['email' => $email, 'password' => $password], $remember);
        if ($users) {
            return redirect('/')->cookie('user', $users, $minutes);
        }
        else{
            return back()->with('alert', 'Invalid Account!!');
        }
    }

    public function register(registerRequest $request)
    {
        $username = $request->inputUsername;
        $email = $request->inputEmail;
        $password = $request->inputPassword;

        DB::table('users')->insert([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => 'member',
        ]);
        return redirect('/login')->with('alert', 'Register Success');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
