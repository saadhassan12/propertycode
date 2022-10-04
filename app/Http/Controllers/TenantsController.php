<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenants;
use Yajra\DataTables\Facades\DataTables;
use DB;
class TenantsController extends Controller
{
    //saad

    public function create()
    {

        return view('tenants.create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'full_name' =>'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',

        ]);
        $input = $request->all();
        tenants::create($input);
        $flas_message=  toastr()->success('Tenants Addedd Successfully');
        return redirect(route('tenants.index'))->with('flas_message');
    }



    public function index(Request $request)
    {

        $data = tenants::latest()->get();

        if ($request->ajax()) {

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/tenants/show/'.$row->id.'" class="show btn btn-info btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a>
                    <a href="/tenants/edit/'.$row->id.'" class="edit btn btn-success btn-sm"> <i class="fa-solid fa-file-pen"></i></a>
                    <a href="/tenants/delete/'.$row->id.'" class="delete btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('tenants.index')->with(compact('data'));

    }
    public function edit($id)
    {
        $tenants = tenants::find($id);
        return view('tenants.edit')->with ('tenants', $tenants);

    }
    public function update(Request $request,$id)
    {

        $input = $request->except('_token');

        $request->validate([

             'full_name' => 'required',
             'email' => 'required',
             'number' => 'required',
             'address' => 'required',

         ]);

         $sql=tenants::where('id',$id)->update($input);
         $flas_message=  toastr()->success('Tenants Updated Successfully');

         return redirect(route('tenants.index'))->with('flas_message');
    }
    public function delete($id)
    {

        DB::table('tenants')->delete($id);
        $flas_message=  toastr()->success('Tenants Deleted Successfully');

        return redirect(route('tenants.index'))->with('flas_message');
    }
    public function show($id)
    {

            $tenants = tenants::find($id);
            return view('tenants.show')->with('tenants', $tenants);

    }
}
