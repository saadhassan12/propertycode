@extends('layouts.app')

@section('content')

    {{-- saad --}}

    <div class="container">

        <div class="row">
        <div class=" mt-6 ml-6">
<h1>
 Units Details
</h1>
        </div>
    </div><br>
    <div class="shadow -lg-3 p-3 mb-5 bg-body rounded mr-4 ml-4 col-md-4">

    <h4>
        Property Units Details
    </h4>
    <P class="card-title ">Select Main Property  : {{ $propertyunits->main}}</P>
    <p class="card-text"> Property Units Title: {{ $propertyunits->title }}</p>
    <p class="card-text"> Commission : {{ $propertyunits->commission }}</p>
    <p class="card-text">Rent: {{ $propertyunits->rent}}</p>
    <p class="card-text"> Deposit: {{ $propertyunits->deposit }}</p>

    <p class="card-text">image: {{ $propertyunits->image }}</p>
  <h3 class="card-text">Description :<h3><br>
    <p {{ $propertyunits->description }}></p><br><br>

    <div class="text-center">

     <button type="submit" class="btn btn-success" ><a href="{{ url('/propertyunits/edit/'. $propertyunits->id) }}"> Edit</a></button>
     <button type="submit" class="btn btn-danger" ><a href="{{ url('/propertyunits/delete/'. $propertyunits->id) }}">  Delete </a></button>
    </div>


@endsection
