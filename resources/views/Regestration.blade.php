<style>
    .regestration {
        color: #88c8bc !important;
    }

    input {
        color: black;
    }

    #page {
        background-color: #e6e6e6;
    }

    .text-danger {
        font-size: 12px !important;
        color: #ff0018 !important;
    }
</style>
@extends('Main.Master')

@section('admin')
<div class="colorlib-loader"></div>

<div id="page">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="bread"><span><a href="{{route('Home')}}">Home</a></span> / <span>Regestration</span></p>
                </div>
            </div>
        </div>
    </div>


    <div class="colorlib-product mt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <form method="post" class="colorlib-form" action="{{route('RegDataSave')}}">
                        @csrf
                        <h2>Regester Yourself</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Select Country</label>
                                    <span class="text-danger">@error('RegCountry') *** {{$message}} @enderror</span>
                                    <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="RegCountry" id="country" class="form-control" value="{{ old('RegCountry') }}">
                                            <option selected disabled>Select country</option>
                                            @foreach ($AllCountry as $Con)
                                            <option value="{{$Con->Country}}">{{$Con->Country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Enter Your Full Name</label>
                                    <span class="text-danger">@error('RegName') *** {{$message}} @enderror</span>
                                    <input type="text" value="{{ old('RegName') }}" id="Name" class="form-control" placeholder="Your firstname" name="RegName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Phone">Phone Number</label>
                                    <span class="text-danger">@error('RegPhone') *** {{$message}} @enderror</span>
                                    <input type="number" value="{{ old('RegPhone') }}" id="Phone" class="form-control" placeholder="Your Contact Number" name="RegPhone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail Address</label>
                                    <span class="text-danger">@error('RegEmail') *** {{$message}} @enderror</span>

                                    <input type="text" id="email" class="form-control" value="{{ old('RegEmail') }}" placeholder="Your E-mail Address" name="RegEmail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <span class="text-danger">@error('RegPassword') *** {{$message}} @enderror</span>

                                    <input type="password" id="Password" value="{{ old('RegPassword') }}" class="form-control" placeholder="Create password" name="RegPassword">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="form-group">
                                    <label class="mr-3">Gender:</label>
                                    <input type="radio" value="Male" name="RegGender" id="Male" class="optradio mx-2">
                                    <label for="Male">Male</label>
                                    <input type="radio" value="Female" name="RegGender" id="Female" class="optradio mx-2">
                                    <label for="Female">Female</label>
                                    <input type="radio" value="Other" name="RegGender" id="Other" class="optradio mx-2">
                                    <label for="Other">Other</label>
                                    <span class="text-danger d-block">@error('RegGender') *** {{$message}} @enderror</span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="DOB">Date Of Birth</label>
                                    <span class="text-danger">@error('RegDOB') *** {{$message}} @enderror</span>

                                    <input type="date" id="DOB" value="{{ old('RegDOB') }}" class="form-control" name="RegDOB">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <span class="text-danger">@error('RegAddress') *** {{$message}} @enderror</span>

                                    <input type="text" id="address" value="{{ old('RegAddress') }}" class="form-control" placeholder="Enter Your Address" name="RegAddress">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stateprovince">State/Province</label>
                                    <span class="text-danger">@error('RegState') *** {{$message}} @enderror</span>

                                    <input type="text" id="stateprovince" class="form-control" placeholder="State Province" value="{{ old('RegState') }}" name="RegState">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zippostalcode">Zip/Postal Code</label>
                                    <span class="text-danger">@error('RegPincode') *** {{$message}} @enderror</span>

                                    <input type="number" value="{{ old('RegPincode') }}" id="zippostalcode" class="form-control" placeholder="Zip / Postal" name="RegPincode">
                                </div>
                            </div>
                            <div class="col-md-12 my-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="Reset" value="Reset" name="Reset" class="btn btn-info w-100 ">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" value="Submit" name="Submit" class="btn btn-secondary w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>


@endsection