@extends('layouts.app')

@section('content')

    {{-- saad --}}

    <div class="container">

        <div class="row">
        <div class=" mt-6 ml-4">
<h1>
    Tenants Details
</h1>
        </div>
    </div><br>
    <div class="shadow -lg-3 p-3 mb-5 bg-body rounded mr-4 ml-4 col-md-4">
<div class="text-center">
        <h4>
          Reprehenderit anim
        </h4>
     <button type="submit" class="btn btn-success" ><a href="{{ url('/tenants/edit/'. $tenants->id) }}"> Edit</a></button>
     <button type="submit" class="btn btn-danger" ><a href="{{ url('/tenants/delete/'. $tenants->id) }}">  Delete </a></button>
    </div><br><br>
    <h2>
        ABOUT ME:
    </h2>
    <P class="card-title "> Name : {{ $tenants->full_name }}</P>
    <p class="card-text">Email : {{ $tenants->email }}</p>
    <p class="card-text">Phone Number : {{ $tenants->number }}</p>
    <p class="card-text">Identity No: {{ $tenants->identity }}</p>
    <p class="card-text">Docoument : {{ $tenants->image }}</p>
    <p class="card-text">Adrees : {{ $tenants->address }}</p>
    <p class="card-text">Occupation : {{ $tenants->occupation }}</p>
    <p class="card-text">Occupation place : {{ $tenants->place }}</p>
    </div>


@endsection


