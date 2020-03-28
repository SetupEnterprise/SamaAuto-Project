<?php

namespace App\Http\Controllers;

use App\Client as AppClient;
use App\Http\Requests\UserFormRequest;
use App\Mail\SignUpConfirmation;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Client;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
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
       
       return view("client/sign_up");
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        
        // $mailable = new SignUpConfirmation('sarr', 'moussadiegane', 'moussadiegane@gmail');
        //Mail::to('moussadiegane@gmail')->send($mailable);
        $user = User::create([
            'nom' => $request->nom, 
            'prenom' => $request->prenom, 
            'email' => $request->email,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'password' => $request->passwd,
            'profils' => 'client'
        ]);
        if($user){
            Client::firstOrCreate([
                'users_id' => $user->id
            ]);
        }
    
      //  flash("Vehicule crée avec succés!", "success");
        return redirect()->route('sign_up');
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
