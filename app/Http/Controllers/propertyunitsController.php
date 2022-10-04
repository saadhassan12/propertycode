<?php

namespace App\Http\Controllers;


use App\Models\propertyunits;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;

class propertyunitsController extends Controller
{
    //saad
    public function create()
    {
        $propertyunits = propertyunits::all();

        return view('propertyunits.create')->with(compact('propertyunits'));
    }
    public function index(Request $request)
    {

            $data = propertyunits::latest()->get();



        if ($request->ajax()) {


            return Datatables::of($data)

                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/propertyunits/show/' . $row->id . '" class="show btn btn-info btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a>
                    <a href="/propertyunits/edit/' . $row->id . '" class="edit btn btn-success btn-sm"><i class="fa-solid fa-file-pen"></i></a>
                    <a href="/propertyunits/delete/' . $row->id . '" class="delete btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('propertyunits.index')->with(compact('data'));


    }
    public function store(Request $request)
    {
        $request->validate([

            'main' =>'required',
            'title' => 'required',
            'commission' => 'required',
            'rent' => 'required',
            'details' => 'required',
            'description' => 'required',

        ]);
        $input = $request->all();
        propertyunits::create($input);
        return redirect('propertyunits')->with('success', 'propertyunits Addedd!');

    }
    public function show($id)
    {

            $propertyunits = propertyunits::find($id);
            return view('propertyunits.show')->with('propertyunits', $propertyunits);

    }
    public function delete($id)
    {

        DB::table('propertyunits')->delete($id);
        $flas_message=  toastr()->success('propertyunits Deleted Successfully');

        return redirect(route('propertyunits.index'))->with('flas_message');
    }
    public function edit($id)
    {
        $propertyunits = propertyunits::find($id);
        return view('propertyunits.edit')->with ('propertyunits', $propertyunits);

    }
    public function update(Request $request,$id)
    {
        $request->validate([

            'main' =>'required',
            'title' => 'required',
            'commission' => 'required',
            'rent' => 'required',
            'details' => 'required',
            'description' => 'required',

        ]);

        $input = $request->except('_token');



         $sql=propertyunits::where('id',$id)->update($input);
         $flas_message=  toastr()->success('propertyunits Updated Successfully');

         return redirect(route('propertyunits.index'))->with('flas_message');
    }

}
