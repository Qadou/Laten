<?php

use App\Http\Controllers\entitesocialController;
use App\Http\Controllers\EntityPhysiqueController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//afficher
Route :: get ('/affiche' , [entitesocialController :: class , "afficher"]);
// jib lformule entity social
Route :: get('/registerEntiteSociale' , function(){
    return view("entitesociale.entitesocial");
});
Route :: post('/registerEntiteSociale' , [entitesocialController :: class , "adduser"]);

Route::get('/deletesocial/{id}', [entitesocialController::class, 'delete']);

Route :: get ('/confirmdeletes/{id}' , [entitesocialController :: class , 'confirmDelete']);

Route :: get ('/modifie/{id}' , [entitesocialController :: class , 'modify']); 

Route :: post ('/update' , [entitesocialController :: class , 'update']);



//question 2

Route :: get ('/afficheentityphysique' , [EntityPhysiqueController :: class , "afficher"]);

Route :: get('/registerentitephysique' , [EntityPhysiqueController :: class , "list_societe"]);

Route :: post('/registerentitephysique' , [EntityPhysiqueController :: class , "adduser"]);

Route::get('/deletephysique/{id}', [EntityPhysiqueController::class, 'delete']);

Route :: get ('/confirmdeletep/{id}' , [EntityPhysiqueController :: class , 'confirmDelete']);

Route :: get ('/modifierPhysique/{id}/{ids}' , [EntityPhysiqueController :: class , 'modify']); 

Route :: post ('/update' , [EntityPhysiqueController :: class , 'update']);

Route :: get("/details/{id}", [EntityPhysiqueController :: class , 'details']);
Route :: get ("/contrats" ,[EntityPhysiqueController :: class , 'contracts']);
Route:: get("/deletecontrat" , [EntityPhysiqueController :: class , 'deletecontrat']);
Route:: get("/sansremise" , [EntityPhysiqueController :: class , 'contratSansRemise']);
Route :: get("/addremise" , [EntityPhysiqueController :: class , 'addremise10']);
Route :: get("/allcontrats" ,[EntityPhysiqueController :: class , 'AllContract']);
Route::get("/AllContrats", [EntityPhysiqueController :: class , 'ContratsFull']);