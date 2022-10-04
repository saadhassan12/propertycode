<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\propertytype;
use Yajra\DataTables\Facades\DataTables;
use DB;
class propertytypeController extends Controller
{
    //
    public function type(Request $request)
    {




        $data = propertytype::latest()->get();



        if ($request->ajax()) {


            return Datatables::of($data)

                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn =
                    '<a href="/propertytype/edit/' . $row->id . '" class="edit btn btn-success btn-sm"><i class="fa-solid fa-file-pen"></i></a>
                    <a href="/propertytype/delete/' . $row->id . '" class="delete btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('property.type')->with(compact('data'));
    }
    public function store(Request $request)
    {
      $propertytype=new propertytype;
      $propertytype->type=$request->type;
      $propertytype->description=$request->description;
      $propertytype->save();


        return redirect('propertytype')->with('success', 'propertytype Addedd!');

    }
}
