@extends('Main.Master')
@section('admin')

<div class="colorlib-product mt-5 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <form method="post" class="colorlib-form" action="{{route('UpdateDataSave',$Edit->id)}}">
                    @csrf
                    <h2>Edit Your Profile</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Select Country</label>
                                <span class="text-danger">@error('UpCountry') *** {{$message}} @enderror</span>
                                <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="UpCountry" id="country" class="form-control">
                                        <option selected disabled>Select country</option>
                                        @foreach ($AllCountry as $Con)
                                        <option {{($Edit->Country ==$Con->Country)?'Selected':''}}>{{$Con->Country}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Enter Your Full Name</label>
                                <span class="text-danger">@error('UpName') *** {{$message}} @enderror</span>
                                <input type="text" value="{{$Edit->Name}}" id="Name" class="form-control" placeholder="Your firstname" name="UpName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">Phone Number</label>
                                <span class="text-danger">@error('UpPhone') *** {{$message}} @enderror</span>
                                <input type="number" value="{{$Edit->Phone}}" id="Phone" class="form-control" placeholder="Your Contact Number" name="UpPhone">
                            </div>
                        </div>

                        <div class="col-md-6 d-flex align-items-center">
                            <div class="form-group">
                                <label class="mr-3">Gender:</label>
                                <input type="radio" value="Male" name="UpGender" id="Male" class="optradio mx-2" {{($Edit->Gender =='Male')?'checked':''}}>
                                <label for="Male">Male</label>
                                <input type="radio" value="Female" name="UpGender" id="Female" class="optradio mx-2" {{($Edit->Gender =='Female')?'checked':''}}>
                                <label for="Female">Female</label>
                                <input type="radio" value="Other" name="UpGender" id="Other" class="optradio mx-2" {{($Edit->Gender =='Other')?'checked':''}}>
                                <label for="Other">Other</label>
                                <span class="text-danger d-block">@error('UpGender') *** {{$message}} @enderror</span>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="DOB">Date Of Birth</label>
                                <span class="text-danger">@error('UpDOB') *** {{$message}} @enderror</span>

                                <input type="date" id="DOB" value="{{$Edit->DOB}}" class="form-control" name="UpDOB">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <span class="text-danger">@error('UpAddress') *** {{$message}} @enderror</span>

                                <input type="text" id="address" value="{{$Edit->Address}}" class="form-control" placeholder="Enter Your Address" name="UpAddress">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stateprovince">State/Province</label>
                                <span class="text-danger">@error('UpState') *** {{$message}} @enderror</span>

                                <input type="text" id="stateprovince" class="form-control" placeholder="State Province" value="{{$Edit->State}}" name="UpState">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="zippostalcode">Zip/Postal Code</label>
                                <span class="text-danger">@error('RegPincode') *** {{$message}} @enderror</span>

                                <input type="number" value="{{$Edit->Pincode}}" id="zippostalcode" class="form-control" placeholder="Zip / Postal" name="UpPincode">
                            </div>
                        </div>
                        <div class="col-md-12 my-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{route('Profile')}}" class="btn btn-info w-100">Cancle</a>
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
@endsection