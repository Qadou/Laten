<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class EntityPhysiqueController extends Controller
{
    public function afficher(Request $request)
    {
        $users = DB::select('select * from entitephysique ;');
        $message = $request->header('message');

        echo Session::get('message');;

        return view('entityphysique.AfficheEntityPhysique', [
            'message' => $message,
            'users' => $users
        ]);
    }

    public function adduser(Request $request)
    {
        $validated = $request->validate([
            'Libelle' => 'required|string',
            'StatusEp' => '|string|in:PR,AC,KO',
        ]);
        $id_entite_physique = $request->input('id_entite_physique');
        $id_entity_sociale = $request->input('list_enttitesocial');
        $Libelle = $request->input('Libelle');
        $Numero_de_Client = $request->input('Numero_de_Client');
        $adresse = $request->input('Adresse');
        $code_postal = $request->input('code_postal');
        $StatusEp = $request->input('StatusEp');
        $date_de_creation = $request->input('date_de_creation');

        DB::insert('insert into entitephysique values (?,?, ?,?, ?,?,?,?)', [$id_entite_physique, $id_entity_sociale, $Libelle, $Numero_de_Client, $adresse, $code_postal, $StatusEp, $date_de_creation]);

        return redirect('/afficheentityphysique')->with(['message' => 'User with Libelle ' . $Libelle . ' added successfully']);
    }
    public function list_societe(Request $request)
    {
        $list = DB::table('entitysociale')->select("entitysociale.raison_social", "entitysociale.id_entite_social")->get();
        return view("entityPhysique.AjouteEntityPhysique", ["list_entitesociale" => $list]);
    }

    public function delete(int $id): View
    {

        return view("entityPhysique.confirm", [
            "id" => $id,

        ]);
    }

    public function confirmDelete(int $id)
    {
        DB::table('entitephysique')->where('id_entite_physique', '=', $id)->delete();

        return redirect('/afficheentityphysique')->with(['message' => 'User with id ' . $id . ' deleted successfully']);

        // return view('users', [
        //     'message' => 'User with id ' . $id . ' deleted successfully',
        //     'users' => $users
        // ]);
    }

    public function modify(int $id, int $ids): View
    {
        $user = DB::table('entitephysique')->where('id_entite_physique', $id)->first();
        $list = DB::table('entitysociale')
            ->select("entitysociale.raison_social", "entitysociale.id_entite_social")
            ->get();

        $id_entite_social = $user->id_entite_social;
        $id_entite_physique = $user->id_entite_physique;
        $Libelle = $user->libelle;
        $Numero_de_Client =  $user->numero_client;
        $adresse = $user->adresse;
        $code_postal = $user->code_postal;
        $StatusEp = $user->status_ep;
        $date_de_creation = $user->date_creation;

        $raiosonsocialClient = DB::table('entitysociale')->join('entitephysique', 'entitysociale.id_entite_social', '=', 'entitephysique.id_entite_social')
            ->where('entitephysique.id_entite_social', "=", $ids)
            ->select("entitysociale.raison_social", "entitysociale.id_entite_social")
            ->distinct()
            ->first();




        return view("entityPhysique.ModifierEntityPhysique", [
            'id_entite_physique' => $id_entite_physique,
            'id_entite_social' => $id_entite_social,
            'Libelle' => $Libelle,
            'Numero_de_client' => $Numero_de_Client,
            'Adress' => $adresse,
            'code_postal' => $code_postal,
            'StatusEp' => $StatusEp,
            'date_de_creation' => $date_de_creation,
            "valueraison" => $raiosonsocialClient,
            "list_entitesociale" => $list,
            "id" => $ids
        ]);
    }

    public function update(Request $request)
    {
        $id_entite_physique = $request->input('id_entite_physique');
        $id_entite_sociale = $request->input('list_enttitesocial');
        $Libelle = $request->input('Libelle');
        $Numero_de_Client = $request->input('Numero_de_Client');
        $adresse = $request->input('Adresse');
        $code_postal = $request->input('code_postal');
        $StatusEp = $request->input('StatusEp');
        $date_de_creation = $request->input('date_de_creation');
        DB::table('entitephysique')
            ->where('id_entite_physique', $id_entite_physique)
            ->update([
                'id_entite_physique' => $id_entite_physique,
                'id_entite_social' => $id_entite_sociale,
                'Libelle' => $Libelle,
                'numero_client' => $Numero_de_Client,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'Status_Ep' => $StatusEp,
                'date_creation' => $date_de_creation,
            ]);

        return redirect('/afficheentityphysique')->with(['message' => 'User with id ' . $id_entite_physique . ' updated successfully']);
    }
    // Question 3
    public function details(int $id)
    {

        $contratRole = DB::table("entitephysique")
            ->join(
                "contactRole",
                "entitephysique.id_entite_physique",
                "=",
                "contactRole.id_entite_physique"
            )
            ->where('contactRole.id_entite_physique', $id)
            ->select('contactRole.role')->first();
        $article = DB::table("entitephysique")
            ->join(
                "contrat",
                "entitephysique.id_entite_physique",
                "=",
                "contrat.id_entite_physique"
            )
            ->join("article", "article.id_contrat", "=", "contrat.id_contrat")
            ->where('contrat.id_entite_physique', $id)
            ->select()->get();

        return view("entityPhysique.detailsEntitePhysique", ["contrat" => $article, "contratRole" => $contratRole]);
    }
    public function contracts(): View
    {
        $contraterror = DB::select('SELECT c1.id_contrat FROM contrat as c1
         inner join contrat as c2 on c1.numero_contrat = c2.numero_contrat
          where c1.statut_contrat = "AC" and c2.statut_contrat = "AC" and c1.version_contrat <> c2.version_contrat 
          GROUP BY c1.id_contrat ;');
        // $contrats = DB :: table("contrat")
        // -> join("contrat as c1" , "contrat.numero_contrat" ,"c1.numero_contrat") ->select()
        // -> where("c1.statut_contrat" ,"=" ,"AC")
        // -> where("c1.version_contrat","<>","contrat.version_contrat")
        // ->groupByRaw("id_contrat")
        // ->havingRaw("count(c1.version_contrat)>= ?", [2])

        // ->get();
        return view("entityPhysique.multicontrats", ["contrats" => $contraterror]);
    }
    public function deletecontrat()
    {
        // $deletecontrat = DB::select('SELECT c1.* FROM contrat c1 
        // inner join contrat c2 on c1.numero_contrat = c2.numero_contrat 
        // where c1.statut_contrat = "AC" and c2.statut_contrat = "AC" 
        // and c1.version_contrat <> c2.version_contrat and 
        // TIMESTAMPDIFF(DAY,c1.date_demarrage, Now()) > TIMESTAMPDIFF(DAY,c2.date_demarrage, Now()) 
        // GROUP BY c1.id_contrat;');

        DB::delete('DELETE c1 FROM contrat c1
    INNER JOIN contrat c2 ON c1.numero_contrat = c2.numero_contrat
    WHERE c1.statut_contrat = "AC" AND c2.statut_contrat = "AC"
    AND c1.version_contrat <> c2.version_contrat
    AND TIMESTAMPDIFF(DAY, c1.date_demarrage, NOW()) > TIMESTAMPDIFF(DAY, c2.date_demarrage, NOW())
    ');
        return redirect("/allcontrats") . with("LES contrats diplice sont supprime");
    }
    public  function AllContract()
    {
        $contrats = DB::table("contrat")->where("statut_contrat", "=", "AC")->get();


        return view("entityPhysique.contrats", ["allcontratsAC" => $contrats]);
    }
    public function ContratsFull()
    {
        $allcontrats = DB::table("contrat")->get();
        return view("entityPhysique.allcontrats", ["allcontrats" => $allcontrats]);
    }
    public function contratSansRemise()
    {
        $contratsansremise = DB::select(
            'SELECT entitephysique.id_entite_physique from entitephysique inner join contrat on entitephysique.id_entite_physique = contrat.id_entite_physique 
            inner join article on contrat.id_contrat = article.id_contrat 
            where contrat.type_contrat = "PREPAID" and article.remise is null 
            group by entitephysique.id_entite_physique,contrat.id_contrat, article.id_article,entitephysique.id_entite_social
        ;'
        );
        return view("/entityPhysique.sensremise", ["sansremise" => $contratsansremise]);
    }
    public function addremise10()
    {
        $addremise = DB::update('UPDATE entitephysique
    INNER JOIN contrat ON entitephysique.id_entite_physique = contrat.id_entite_physique
    INNER JOIN article ON contrat.id_contrat = article.id_contrat
    SET article.remise = 10 , article.prix_facture = article.montant - article.remise
    WHERE contrat.type_contrat = "PREPAID" AND article.remise IS NULL
    ;');
        $contratsansremise = DB::select(
            'SELECT * from entitephysique inner join contrat on entitephysique.id_entite_physique =
        contrat.id_entite_physique inner join article on contrat.id_contrat = article.id_contrat
        where contrat.type_contrat = "PREPAID" and article.remise = 10
        group by entitephysique.id_entite_physique,contrat.id_contrat, article.id_article
        having count(article.id_article)>=1
        ;'
        );
        return view("entityPhysique.addremise", ["addremise" => $contratsansremise]);
    }
}
