@extends('layouts.app')

@section('content')
    {{-- @dd($propertyunits); --}}
    {{-- saad --}}
    <div class="container">
        <form action="{{ url('/propertyunits/update/' . $propertyunits->id) }}" method="POST" enctype="">
            {!! csrf_field() !!}
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
                                    name="main"value="{{ $propertyunits->main }}">
                                    <span style="color:red">@error('main'){{ $message }}@enderror</span>

                            </div>
                            <div class="col">
                                <label for="email">Property Units Title *</label>
                                <input type="text" class="form-control" placeholder="" name="title" value="{{ $propertyunits->title }}">
                                <span style="color:red">@error('title'){{ $message }}@enderror</span>

                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="Fname"> Commission * </label>
                                <input type="number" class="form-control" placeholder="" name="commission"value="{{ $propertyunits->commission }}">
                                <span style="color:red">@error('commission'){{ $message }}@enderror</span>
                            </div>
                            <div class="col">
                                <label for="email">Rent *</label>
                                <input type="number" class="form-control" placeholder="" name="rent"value="{{ $propertyunits->rent }}">
                                <span style="color:red">@error('rent'){{ $message }}@enderror</span>

                            </div>

                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Deposit</label>
                                <div class="input-group mb-3 text-center">
                                    <span class="input-group-text bg-#918b8a" id="basic-addon1">$</span>
                                    <input type="number" class="form-control" placeholder="" name="deposit"value="{{ $propertyunits->deposit }}">

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="email">Details *</label>
                            <input type="text" class="form-control" placeholder="e.g two bedroom,studio ,villa"
                                name="details"value="{{ $propertyunits->details }}">
                                <span style="color:red">@error('details'){{ $message }}@enderror</span>
                        </div><br>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description /Features*</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Room features and description"
                                rows="3" name="description"value="{{ $propertyunits->description }}"></textarea>
                                <span style="color:red">@error('description'){{ $message }}@enderror</span>
                        </div><br>
                        <div class="col">
                            <label for="file">Upload Room Image </label>
                            <input type="file" class="form-control" id="" name="image"value="{{ $propertyunits->image }}">
                        </div><br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-lg btn-primary me-md-2" type="submit">Update Room Units</button>
                        </div>
                    </div>
                </div>
        </form>
        @endsection
