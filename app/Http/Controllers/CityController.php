<?php

namespace App\Http\Controllers;
use App\Models\Scale;
use App\Models\Capital_city;
use App\Models\Zone_wereda;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $scales = Scale::all();
        return response()->json($scales);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'scale_name' => 'required',
            'value' => 'required'

        ]);

        $check = $request->has('check') ? true : false;

        $scale = new Scale([
            'scale_name' => $validateData['scale_name'],
            'value' => $validateData['value'],
            'status' => $check,

        ]);
        $scale->save();

        return response()->json("scale added successfully");
    }

    public function show($id)
    {
        $scale = Scale::findOrFail($id);
        return response()->json($scale);
    }
    public function update(Request $request, $id)
    {
        $status = $request->boolean('check');


        $scale = Scale::find($id);

        if (!$scale) {
            return response()->json(['error' => 'Scale not found'], 404);
        }
        $scale->update([
            'scale_name' => $request->scale_name,
            'value' => $request->value,
            'status' => $status,
        ]);

        return response()->json($scale);
    }


    public function destroy(string $id)
    {
        $scale = Scale::find($id);
        if (!$scale) {
            return response()->json('scale not found', 404);
        } else {
            $scale->delete();
            return response()->json('scale deleted successfully');
        }
    }
    public function city()
    {

        $capitalcity = Capital_city::all();
        return response()->json($capitalcity);
    }
    public function Addcity(Request $request)
    {
        $validateData = $request->validate([
            'city_name' => 'required',
            'low' => 'required',
            'medium' => 'required',
            'high' => 'required',
        ]);

        $check = $request->has('check') ? true : false;

        $data = new capital_city([
            'city_name' => $validateData['city_name'],
            'desertalw' => $check,
            'low' => $validateData['low'],
            'medium' => $validateData['medium'],
            'high' => $validateData['high'],
            'status' => $check,
        ]);
        $data->save();
        return response()->json("city added successfully");
    }
    public function editcity($id){
        $city=capital_city::find($id);
        return response()->json($city);

    }
    
    public function updatecity(Request $request,$id){
        $check = $request->has('check') ? true : false;


        $cityupdate = capital_city::find($id);

        if (!$cityupdate) {
            return response()->json(['error' => 'Scale not found'], 404);
        }
        $cityupdate->update([
            'city_name' => $request->city_name,
            'low' => $request->low,
            'medium' => $request->medium,

            'high' => $request->city_name,

            'desertalw' => $check,
            'status' => $check,
        ]);

        return response()->json($cityupdate);
    }



    }

