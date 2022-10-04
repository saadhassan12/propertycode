@extends('layouts.app')

@section('content')
    {{-- @dd($propertyunits); --}}
    {{-- saad --}}
    <div class="container">
        <form method="POST" action="{{ url('propertyunits/store') }}" enctype="">
            @csrf
            <div class="row">
                <div class=" mt-6 ml-4">
                    <h1>
                        Add Property Units
                    </h1>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-7">
                    <div class="shadow -lg-3 p-3 mb-5 bg-body rounded mr-2 ml-2">
                        <h4>
                            Add Property Details
                        </h4>
                        <div class="row">
                            <div class="col">
                                <label for="Fname"> Select Main Property * </label>
                                <input class="form-select form-control select2 " aria-label="Default select example"
                                    name="main">

                            </div>
                            <div class="col">
                                <label for="email">Property Units Title *</label>
                                <input type="text" class="form-control" placeholder="" name="title">

                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="Fname"> Commission * </label>
                                <input type="number" class="form-control" placeholder="" name="commission">
                                </select>
                            </div>
                            <div class="col">
                                <label for="email">Rent *</label>
                                <input type="number" class="form-control" placeholder="" name="rent">

                            </div>

                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Deposit</label>
                                <div class="input-group mb-3 text-center">
                                    <span class="input-group-text bg-#918b8a" id="basic-addon1">$</span>
                                    <input type="number" class="form-control" placeholder="" name="deposit">

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="email">Details *</label>
                            <input type="text" class="form-control" placeholder="e.g two bedroom,studio ,villa"
                                name="details">

                        </div><br>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description /Features*</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Room features and description"
                                rows="3" name="description"></textarea>
                        </div><br>
                        <div class="col">
                            <label for="file">Upload Room Image </label>
                            <input type="file" class="form-control" id="" name="image">
                        </div><br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-lg btn-primary me-md-2" type="submit">Create Room Units</button>
                        </div>
                    </div>
                </div>
        </form>
        <div class="col-md-4">
            <div class="  shadow  p-3 mb-5 mr-2 ml-2">
                <h5> Added Rooms For Property :</h5><br>
                @foreach ($propertyunits as $data)

                <div class="row">
                    <div class="col-md-8">
                    <h5 class="card- text">{{ $data->title }}</h5>
                    <p class="card-text"> {{ $data->details }}</p>
                </div>
                <div class="col-md-3  ml-4 ">
                    <p class=" text-center text-white bg-secondary"> ${{ $data->deposit }} </p>
                </div>

            </div><br>
            @endforeach
        </div>
    </div>
    </div>
@endsection
