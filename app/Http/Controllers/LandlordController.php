<?php

namespace App\Http\Controllers;

use App\Models\landlord;
use Illuminate\Http\Request;
use Datatables;
use DB;

class LandlordController extends Controller
{
    //saad

    public function create()
    {
        return view('landlord.create');
    }
    public function store(Request $request)
    {

        $input = $request->all();
        $request->validate([

            'full_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',

        ]);
        landlord::create($input);
        $flas_message =  toastr()->success('Landlord Addedd Successfully');
        return redirect('landlord')->with('flas_message');
    }
    public function index(Request $request)
    {
        $data = landlord::latest()->get();
        //   echo '<pre>';print_r($request);echo '</pre>';die;
        if ($request->ajax()) {

            // $data = landlord::latest()->get();

            // print_r($data);

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/landlord/show/' . $row->id . '" class="show btn btn-info btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a>
                    <a href="/landlord/edit/' . $row->id . '" class="edit btn btn-success btn-sm"><i class="fa-solid fa-file-pen"></i></a>
                    <a href="/landlord/delete/' . $row->id . '" class="delete btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('landlord.index')->with(compact('data'));
    }
    public function edit($id)
    {
        $landlords = landlord::find($id);

        return view('landlord.edit')->with(compact('landlord'));
    }
    public function update(Request $request, $id)
    {
        $input = $request->except('_token');
        $request->validate([

            'full_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',

        ]);

        $sql = landlord::where('id', $id)->update($input);

        $flas_message =  toastr()->success('Landlord updated Successfully');
        return redirect(route('landlord.index'))->with('flas_message');
    }
    public function show($id)
    {
        $landlord = landlord::find($id);
        return view('landlord.show')->with('landlord', $landlord);
    }
    public function delete($id)
    {
        DB::table('landlords')->delete($id);
        $flas_message =  toastr()->success('Landlord Deleted Successfully');
        return redirect(route('landlord.index'))->with('flas_message');
    }
}
