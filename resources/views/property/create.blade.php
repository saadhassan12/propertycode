@extends('layouts.app')

@section('content')
    {{-- saad --}}
    

            <div class="row" >
                <div class=" mt-6 ml-4">
                    <h1>
                        Create Property
                    </h1>
                </div>
            </div><br>
            <div class="shadow -lg-3 p-3 mb-5 bg-body rounded mr-2 ml-2">
                <h4>
                    Create New Property
                </h4>
                <p>Full all required details in all sections before submitting the data</p><br>
                <div class="container-fluid">
                    <div class="row bg-light col-md-12 "style="height: 60px;">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <button id="basic" type="button"
                                        class="btn btn-outline-primary mt-2 btn-lg btn-block real">
                                        Basic Details
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button"
                                        id="location"class="btn btn-outline-primary btn-lg btn-block mt-2   real  ">
                                        Location
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button"
                                        id="features"class="btn  btn-outline-primary btn-lg btn-block  mt-2 real   ">
                                        Amenities
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" id="image"
                                        class="btn btn-outline-primary  btn-lg btn-block mt-2  real ">
                                        Property Image
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="btn1">
        <form  id="form1">
            @csrf
                           
                        <div class="row">
                            <div class="col-md-4">
                                <label>Name *</label>
                                <input type="text" class="form-control" placeholder="" name="name">
                                <span style="color:red">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label>Rent *</label>
                                <div class="input-group mb-3 text-center">
                                 <span class="input-group-text bg-#918b8a" id="basic-addon1">$</span>
                                    <input type="number" class="form-control" placeholder="" name="rent">
                                </div>
                                <span style="color:red">
                                    @error('rent')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label>Type *</label>
                                <select class="form-select form-control " aria-label="Default select example"
                                    name="type">
                                    @foreach ($propertytype as $item)
                                    <option value="{{ $item->id }}">{{ $item->type }}</option>
                                @endforeach
                                    <span style="color:red">
                                        @error('type')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </select>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Select Landlord *</label>
                                <select class="form-select form-control select2 " aria-label="Default select example"
                                    name="landlord">
                                    @foreach ($landlord as $item)
                                        <option value="{{ $item->id }}">{{ $item->full_name }}</option>
                                    @endforeach
                                </select>
                                <span style="color:red">
                                    @error('landlord')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label>Area</label>
                                <div class="input-group mb-3 text-center">

                                    <span class="input-group-text bg-#918b8a" id="basic-addon1">Sqmt</span>
                                    <input type="number" class="form-control" placeholder="" name="area">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Agency Commission </label>
                                <div class="input-group mb-3 text-center">
                                    <input type="number" class="form-control" placeholder="" name="agency">
                                    <span class="input-group-text bg-#918b8a" id="basic-addon1">%</span>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Deposit</label>
                                <div class="input-group mb-3 text-center">
                                    <input type="number" class="form-control" placeholder="" name="deposit">
                                    <span class="input-group-text bg-#918b8a" id="basic-addon1">$</span>
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description *</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            <span style="color:red">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div><br>
                 
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-lg btn-primary me-md-2" type="submit">Create Property</button>
                    </div>
              
               
        </form>
    </div> 






                <div id="btn2">
                    <form id="form2">
                        <input type="hidden" class="form-control" placeholder="" name="property_id" id="basic_property_id">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" name="search">Search location</label>
                        <input type="text" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" name="address">Address</label>
                        <input type="text" class="form-control">
                    </div><br>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="exampleInputEmail1" class="form-label" name="city">City</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputEmail1" class="form-label" name="state">State</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="exampleInputEmail1" class="form-label" name="post">Post Code</label>
                            <input type="text" class="form-control">
                        </div>
                    </div><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-lg btn-primary me-md-2" type="submit">Create Property</button>
                    </div>
                    </form>
                </div>






             <div id="btn3">
             <form id="form3">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Property Note </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Property Age (optional)</label>
                            <input type="number" class="form-control" placeholder="" name="age">

                        </div>
                        <div class="col-md-3">
                            <label>Rooms (optional)</label>
                            <input type="number" class="form-control" placeholder="" name="rooms">
                        </div>
                        <div class="col-md-3">
                            <label> BedRooms (optional)</label>
                            <input type="number" class="form-control" placeholder="" name="bedrooms">
                        </div>
                        <div class="col-md-3">
                            <label>Bathrooms (optional)</label>
                            <input type="number" class="form-control" placeholder="" name="bathrooms">
                        </div>
                    </div><br>
                    <div class="ml-3 mr-3">
                        <div class="row ">
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Air Conditioner
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Heating
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Internet
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Swimming Pool
                                </label>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Car Parking
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Balcony
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Garden
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Pets Allow
                                </label>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Laundry room
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Gym
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Alarm
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Swimming Pool
                                </label>
                            </div>
                        </div>
                    </div><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-lg btn-primary me-md-2" type="submit">Create Property</button>
                    </div>
                </form>
                </div>



              
               
                
               <div id="btn4">
                    <form id="form4">
                    <div style=" background-color: lightblue">
                        <p class="ml-5">Max file size allowed is 5MB</p>
                        <p class="ml-5"> Upload only images of type jpg.gif and png </p>
                    </div><br>
                    <div>
                        <div class="col">
                            <label for="file">Property Image</label>
                            <input type="file" class="form-control" id="" name="image">
                        </div>
                    </div><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-lg btn-primary me-md-2" type="submit">Create Property</button>
                    </div>
                    </form>
                </div> 
            </div>
     
    @endsection
