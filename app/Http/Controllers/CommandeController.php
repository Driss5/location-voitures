<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Car;

class CommandeController extends Controller
{
    public function commandeConfirme(Request $request, $id) {
        $carName = Car::where('id', $id)->value('car_name');

        $commande = New Commande();
        $commande->full_name = $request->fullName;
        $commande->cni = $request->cni;
        $commande->n_tel = $request->nTel;
        $commande->date_debut = $request->dateD;
        $commande->date_fin = $request->dateF;
        $commande->car_id = $id;
        $commande->car_name = $carName;
        $commande->confirmed = 0;
        $commande->save();

        return Redirect()->route('seeAllCars')->with('success', 'Commande envoyée avec succès !');
    }

    public function showCommande() {
        
        $commande = Commande::all();
        return view('admin.showCommandes', ['commandes' => $commande]);
    }

    public function updateCommande($id) {
        $commandeU = Commande::find($id);
        return view('admin.updateCommande', ['commandeU' => $commandeU]);
    }

    public function updateCommandeAction(Request $request, $id) {
        $commandeU = Commande::find($id);
        $commandeU->confirmed = $request->disponibleOn;
        $commandeU->save();
        return redirect()->route('commandesAdmin');
    }

    public function deleteCommande($id) {
        $commandeD = Commande::find($id);
        $commandeD->delete();
        return redirect()->route('commandesAdmin');
    }
}
