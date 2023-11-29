<style>
    .contact {
        color: #88c8bc !important;
    }

    .text-danger {
        font-size: 12px !important;
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
                    <p class="bread"><span><a href="{{route('Home')}}">Home</a></span> / <span>Contact</span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Contact Information</h3>
                    <div class="row contact-info-wrap">
                        <div class="col-md-3">
                            <p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-wrap">
                        <h3>Get In Touch</h3>
                        <form action="{{route('ContactDataSave')}}" method="post" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname" name="ConFirstName" value="{{old('ConFirstName')}}">
                                        <span class="text-danger">
                                            @error('ConFirstName') *** {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname" name="ConLastName">
                                        <span class="text-danger" value="{{old('ConLastName')}}">
                                            @error('ConLastName') *** {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <span class="text-danger">
                                            @error('ConEmail') *** {{$message}} @enderror
                                        </span>
                                        <input type="email" id="email" class="form-control p-2" placeholder="Your email address" name="ConEmail" value="{{old('ConEmail')}}">

                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <span class="text-danger">
                                            @error('ConSubject') *** {{$message}} @enderror
                                        </span>
                                        <input type="text" id="subject" class="form-control" placeholder="Your subject of this message" name="ConSubject" value="{{old('ConSubject')}}">

                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" name="ConMessage"></textarea>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="" height="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

@endsection