<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarInformation;
use App\Models\Car;
use Illuminate\Support\Facades\DB;

class CarinformationController extends Controller
{

    public function addOption(Request $request, $id) {
        $carId = Car::find($id);

        DB::update('update cars set completed_option = ? WHERE id = ?', [
            1,
            $carId->id
        ]);

        $carOption = new CarInformation();
        $carOption->sieges = $request->siege;
        $carOption->portes = $request->porte;
        $carOption->bagages = $request->bagage;
        $carOption->boite = $request->boite;
        $carOption->kilometrage = $request->kilometrage;
        $carOption->station = $request->station;
        $carOption->car_id = $carId->id;
        $carOption->save();
        return Redirect()->route('addOptionCar');
    }

    public function formOption($id) {
        $carId = Car::find($id);
        return view('admin.addOptionForm', ['carId' => $carId]);
    }
}
