<?php
namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Mail\SignUpConfirmation;
use App\models\Admin;
use App\models\Billet;
use App\models\Client;
use App\models\Gerant;
use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function authentificate()
    {
        return view('/admin/sign_in_admin');
    }
    public function auth_store(Request $request)
    {
        $email = $request->email;
        $password = $request->current_password;
        
        $admin = User::where('email', $email)->where('password', $password)->where('profil', 'Admin')->first();
        session(['admin' => $admin]);
        if($admin){
            return view('admin/home-admin');
        }else{
            return redirect()->route('admin_auth');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_gerant()
    {
        return view('admin/create-gerant');
    }

    public function store_gerant(Request $request){
        
        $user =User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'password' => 'passer',
            'profil' => 'Gerant'
        ]);
        if($user){
            Gerant::firstOrCreate([
                'users_id' => $user->id
            ]);
        }
        
     //   $mailable = new SignUpConfirmation($request->nom, $request->prenom, $request->email);
       // Mail::to($request->email)->send($mailable);
      //  flash("Vehicule crée avec succés!", "success");
        return view('/admin/create-gerant', compact('user'));
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

    public function stat_client()
    {
        $clients = Client::count();     
        $data = new DataStatistiqueClient();
        $nbreAuth = $data->nbre_auth(); 
       
        return view('admin.statistiques-client', compact('clients', 'nbreAuth'));
    }

    public function stat_gerant()
    {
        return view('admin.statistiques-gerant');
    }

    public function stat_billet()
    {
        $totalBillet = Billet::count();
        $totalReporte = Billet::where('etat','reporte')->count();
        $totalVendu = Billet::where('etat','vendu')->count();
        return view('admin.statistiques-billet', compact('totalBillet', 'totalReporte', 'totalVendu'));
    }

    public function stat_vendeur()
    {
        return view('admin.statistiques-vendeur');
    }

    public function quit(){
        session()->forget('admin');
        return redirect()->route('admin_auth');
    }
}
