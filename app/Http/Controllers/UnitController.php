<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\UnitPeople;
use App\Models\UnitPet;
use App\Models\UnitVehicle;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function getInfo($id)
    {
        $array = ['error' => ''];

        $unit = Unit::find($id);
        if($unit) {
            $peoples = UnitPeople::where('id_unit', $id)->get();
            $vehicles = UnitVehicle::where('id_unit', $id)->get();
            $pets = UnitPet::where('id_unit', $id)->get();

            foreach($peoples as $pKey => $pValue) {
                $peoples[$pKey]['birthdate'] = date('d-m-Y', strtotime($pValue['birthdate']));
            }

            $array['peoples'] = $peoples;
            $array['vehicles'] = $vehicles;
            $array['pets'] = $pets;
        } else {
            $array['error'] = 'Propriedade inexistente.';
            return $array;
        }

        return $array;
    }

    public function addPerson($id)
    {
        $array = ['error' => ''];



        return $array;
    }

    public function addVehicle($id)
    {
        $array = ['error' => ''];



        return $array;
    }

    public function addPet($id)
    {
        $array = ['error' => ''];



        return $array;
    }

    public function removePerson($id)
    {
        $array = ['error' => ''];



        return $array;
    }

    public function removeVehicle($id)
    {
        $array = ['error' => ''];



        return $array;
    }

    public function removePet($id)
    {
        $array = ['error' => ''];



        return $array;
    }
}
