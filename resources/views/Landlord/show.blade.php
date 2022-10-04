@extends('layouts.app')

@section('content')

    {{-- saad --}}

    <div class="container">

        <div class="row">
        <div class=" mt-6 ml-4">
<h1>
    Landlord Details
</h1>

        </div>
    </div><br>
    <div class="shadow -lg-3 p-3 mb-5 bg-body rounded mr-4 ml-4 col-md-4">
<div class="text-center">
        <h4>
          Hello Landlord
        </h4>
     <button type="submit" class="btn btn-success" ><a href="{{ url('/landlord/edit/'. $landlord->id) }}"> Edit</a></button>
     <button type="submit" class="btn btn-danger" ><a href="{{ url('/landlord/delete/'. $landlord->id) }}">  Delete </a></button>
    </div><br><br>
    <h2>
        ABOUT ME:
    </h2>
    <P class="card-title ">Full Name : {{ $landlord->full_name }}</P>
    <p class="card-text">Email : {{ $landlord->email }}</p>
    <p class="card-text">Phone Number : {{ $landlord->number }}</p>
    <p class="card-text">Adrees : {{ $landlord->address }}</p>
    <p class="card-text">Bank Associated : {{ $landlord->occupation }}</p>
    <p class="card-text">Bank Acoount No : {{ $landlord->account }}</p>
    </div>

@endsection
