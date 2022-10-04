@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ms-2 me-2 mt-5 ">

                    <a href="/propertyunits"> <button class="btn btn-danger mt-5 ml-3 mb-3"> Add Room
                        </button></a>

                    <div class="table-responsive">
                        <table class="table mt-4 yajra-datatable" id="units_data">
                            <thead>
                                <tr>
                                    <th scope="col" class="">ID</th>
                                    <th scope="col" class="">Title </th>
                                    <th scope="col" class="">Detail</th>
                                    <th scope="col" class="">Rent</th>
                                    {{-- <th scope="col" class="">Status</th> --}}
                                    <th scope="col" class="">Parent Property</th>
                                    <th scope="col" class="">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
