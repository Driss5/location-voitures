<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Contact;
use App\Models\CarInformation;

class CarController extends Controller
{
    public function AddNewCar(Request $request) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        $newCar = New Car();

        $newCar->car_name = strtolower($request->carName);
        $newCar->car_prix = $request->carPrix;
        $newCar->category = strtolower($request->carCategorie);
        $newCar->disponible = $request->disponible;
        $newCar->option_1 = $request->optionOne;
        $newCar->option_2 = $request->optionTwo;
        $newCar->option_3 = $request->optionThre;
        $newCar->quantite = $request->carQuantite;
        $newCar->affiche = $request->affiche;
        $newCar->disponible_on = $request->disponibleOn;

        $newCar->image = 'images/' . $imageName;
        $newCar->save();
        return redirect()->route('home');
    }

    public function showCarsHome() {
        $carHome = Car::where('affiche', true)->take(4)->get();
        return view('home.home', ['carHome' => $carHome]);
    }

     public function SeeAllCars() {

        $allCar = Car::simplePaginate(8);
        return view('seeAllCars', ['cars' => $allCar]);
    }

    public function updateCarAffichage() {
        $allCar = Car::All();
        return view('admin.updateCar', ['cars' => $allCar]);
    }

    public function deleteCar($id) {
        $deleteCar = Car::find($id);
        $deleteCar->delete();
        return Redirect()->route('updateCar');
    }

    public function updateCarForm($id) {
        $car = Car::find($id);
        return view('admin.updateForm', ['car' => $car]);
    }

    public function updateCarFormInsert(Request $request, $id) {

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        $carU = Car::find($id);
        $carU->car_name = $request->carName;
        $carU->car_prix = $request->carPrix;
        $carU->category = $request->carCategorie;
        $carU->disponible = $request->disponible;
        $carU->option_1 = $request->optionOne;
        $carU->option_2 = $request->optionTwo;
        $carU->option_3 = $request->optionThre;
        $carU->quantite = $request->carQuantite;
        $carU->affiche = $request->affiche;
        $carU->disponible_on = $request->disponibleOn;
        $carU->image = 'images/' . $imageName;
        $carU->save();
        return Redirect()->route('updateCar');
    }

    public function goCommandePage($id) {
        $car = Car::find($id);
        $carOption = CarInformation::where('car_id', $car->id)->get();

        return view('commande', ['car' => $car, 'carOption' => $carOption ]);
    }

    public function addOptionCarAffichage() {
        $allCar = Car::All();
        return view('admin.addOptionCar', ['cars' => $allCar]);
    }
}
