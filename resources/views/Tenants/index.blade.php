@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ms-2 me-2 mt-5 ">

                    <a href="/tenants"> <button class="btn btn-primary mt-5 ml-3 mb-3">Add
                        </button></a>

                    <div class="table-responsive">
                        <table class="table mt-4 yajra-datatable" id="tenants_data">
                            <thead>
                                <tr>
                                    <th scope="col" class="">ID</th>
                                    <th scope="col" class=""> Name</th>
                                    <th scope="col" class="">Addrees</th>
                                    <th scope="col" class="">Occupation</th>

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
