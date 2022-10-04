<?php

namespace App\Http\Controllers;
use  app\Http\Controllers\LandlordController;
use App\Models\property;
use App\Models\Landlord;
use App\Models\propertydetail;
use App\Models\propertytype;
use Illuminate\Http\Request;


class PropertyController extends Controller
{
    //saad
    public function index()
    {
        return view('property.index');

    }
    public function create()
    {
        $landlord = landlord::all();
        $propertytype = propertytype::all();
        return view('property.create')->with('landlord', $landlord)->with('propertytype', $propertytype);
    }
    public function Store(Request $request)
    {
      
        $input = $request->all();
        $request->validate([

            'name' =>'required',
            'rent' => 'required',
            'type' => 'required',
            'landlord' => 'required',
            'description' => 'required',

        ]);
       
       $result= propertydetail::create($input);
        $flas_message =  toastr()->success('detail Addedd Successfully');
        // return redirect('property')->with('flas_message');
        return $result;
    }
    
}
