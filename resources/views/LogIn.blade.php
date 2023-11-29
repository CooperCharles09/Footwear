<style>
    #page {
        background-color: #e6e6e6;
    }
</style>
@extends('Main.Master')

@section('admin')

<div id="page">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="bread"><span><a href="{{route('Home')}}">Home</a></span> / <span>Log In</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-product mt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form method="get" class="colorlib-form" action="{{route('LogInProcess')}}">
                        @csrf
                        <h2 style="font-size: 30px;">Log In</h2>
                        @if (Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @if (Session::has('DeleteData'))
                        <div class="alert alert-info">{{Session::get('DeleteData')}}</div>
                        @endif


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <span class="ml-2 text-danger">@error('LogEmail')
                                        *** {{$message}}
                                        @enderror
                                    </span>
                                    @if (Session::has('EmailFail'))
                                    <span class="text-danger">{{Session::get('EmailFail')}}</span>
                                    @endif
                                    <input type="text" id="email" value="{{ old('LogEmail') }}" class="form-control" placeholder="Your E-mail Address" name="LogEmail">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <span class="ml-2 text-danger">@error('LogPassword')
                                        *** {{$message}}
                                        @enderror
                                    </span>
                                    @if (Session::has('PassFail'))
                                    <span class="text-danger">{{Session::get('PassFail')}}</span>
                                    @endif
                                    <input type="password" id="Password" class="form-control" placeholder="Create password" name="LogPassword">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <p>Not having account? <a href="{{route('Regestration')}}" class="text-info" style="text-decoration: underline;"> Create new account </a> </p>
                            </div>

                            <div class="col-md-12 my-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Submit" name="Submit" class="btn btn-secondary w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</div>
@endsection