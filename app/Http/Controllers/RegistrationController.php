<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\WelcomeMarkdown;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
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
        return View('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationForm $formRequest)
    {
        // $this->validate(request(), [
            // 'name' => 'required',
            // 'email' => 'required|email',
            // 'password' => 'required|confirmed'
        // ]);

        // $user = User::create([
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'password' => bcrypt(request('password'))
        // ]);
        
        // \Mail::to($user)->send( new WelcomeMarkdown($user) );
        // request(['name', 'email', 'password'])
        //Login user
        // \Auth::login();
        // auth();

        $user = $formRequest->persist();

        auth()->login($user);

        return redirect()->home();
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
