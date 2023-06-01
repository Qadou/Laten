<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class entitesocialController extends Controller
{
    //methode afficher
    public function afficher(Request $request)
    {
        $users = DB::select('select * from entitysociale;');
        $message = $request->header('message');
        // ila kan message jibo affichih
        echo Session::get('message');;

        return view('entitesociale.afficheentitesociale', [
            'message' => $message,
            'users' => $users
        ]);
    }
    // add user
    public function adduser(Request $request)
    { 
        //required
        $validated = $request->validate([
            'raison_sociale' => 'required|string',
            'numero_registre' => 'required|int',
        ]);
        $id_entity_sociale = $request->input('id_entity_sociale');
        $raison_sociale = $request->input('raison_sociale');
        $numero_registre = $request->input('numero_registre');
        $patente = $request->input('patente');
        $adresse = $request->input('adresse');
        $code_postal = $request->input('code_postal');
        DB::insert('insert into entitysociale values (?,?, ?, ?, ?, ?)', [$id_entity_sociale ,$raison_sociale ,$numero_registre
        , $patente, $adresse, $code_postal]);

        return redirect('/affiche')->with(['message' => 'User with id ' . $raison_sociale . ' added successfully']);
    }
    // delete
    public function delete(int $id) :View { 
 
        return view("entitesociale.confirm", [
            "id" => $id,

        ]);
    }
    //confirmer 
    public function confirmDelete(int $id)
    {
        DB::table('entitysociale')->where('id_entite_social', '=', $id)->delete();

        return redirect('/affiche')->with(['message' => 'User with id ' . $id . ' deleted successfully']);

       
    }
    //modify
    public function modify(int $id): View
    {
        $user = DB::table('entitysociale')->where('id_entite_social', $id)->first();
        $id_entite_social =$user ->id_entite_social;
        $raison_sociale =  $user ->raison_social ;
        $numero_registre= $user ->numero_registre ;
        $adresse = $user ->adresse ;
        $code_postal = $user ->code_postal;
        $patente = $user ->patente;

        return view("entitesociale.modifiierEntiteSocial", [
            'id_entite_social' => $id_entite_social,
            'raison_social' => $raison_sociale,
            'numero_registre' => $numero_registre,
            'patente' => $patente,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
        ]);
    }
    //update
    public function update(Request $request)
    {
        $id_entity_sociale = $request->input('id_entity_sociale');
        $raison_sociale = $request->input('raison_sociale');
        $numero_registre = $request->input('numero_registre');
        $patente = $request->input('patente');
        $adresse = $request->input('adresse');
        $code_postal = $request->input('code_postal');
        DB::table('entitysociale')
            ->where('id_entite_social', $id_entity_sociale)
            ->update([
                'id_entite_social' => $id_entity_sociale,
                'raison_social' => $raison_sociale,
                'numero_registre' => $numero_registre,
                'patente' => $patente,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
            ]);

        return redirect('/affiche')->with(['message' => 'User with id ' . $id_entity_sociale . ' updated successfully']);
    }
}

































