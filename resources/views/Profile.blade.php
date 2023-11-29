<style>
    .fa-user {
        color: #88c8bc !important;

    }

    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 15px;
    }


    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }
</style>

@extends('Main.Master')

@section('admin')


<div id="page">

    <div class="container my-5">
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">

                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center text-center h-100">
                                <div>
                                    @if (session()->has('LogInId'))
                                    @if ($Pdata -> Gender == 'Male')
                                    <img src="/images/profile/boy.png" alt="Admin" class="rounded-circle" width="150">
                                    @endif
                                    @if ($Pdata -> Gender == 'Female')
                                    <img src="/images/profile/girl.jpg" alt="Admin" class="rounded-circle" width="150">
                                    @endif
                                    @if ($Pdata -> Gender == 'Other')
                                    <img src="/images/profile/User.jfif" alt="Admin" class="rounded-circle" width="150">
                                    @endif
                                    @endif
                                    @if (!(session()->has('LogInId')))
                                    <img src="/images/profile/User.jfif" alt="Admin" class="rounded-circle" width="150">
                                    @endif
                                    <div class="mt-3">
                                        <h4>
                                            @if (session()->has('LogInId'))
                                            {{$Pdata->Name}}
                                            @endif
                                            @if (!(session()->has('LogInId')))
                                            user
                                            @endif
                                        </h4>
                                        <p class="text-secondary mb-1">
                                            @if (session()->has('LogInId'))
                                            {{$Pdata->Country}}
                                            @endif
                                            @if (!(session()->has('LogInId')))
                                            Default
                                            @endif
                                        </p>
                                        <p class="text-muted font-size-sm"> @if (session()->has('LogInId'))
                                            {{$Pdata->Address}}
                                            @endif
                                            @if (!(session()->has('LogInId')))
                                            Bay Area, San Francisco, CA('default')
                                            @endif
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="ml-auto mr-5 ml-3 mt-4">
                            <!-- Default dropleft button -->
                            <div class=" dropleft">
                                <i class="fa-solid fa-ellipsis-vertical p-2" style="font-size: 20px ;cursor:pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                <div class="dropdown-menu">

                                    <!-- Edit Button Code start from here -->
                                    @if (session()->has('LogInId'))
                                    <a class="dropdown-item" href="{{route('Update',$Pdata->id)}}">
                                        Edit
                                    </a>
                                    @endif
                                    @if (!(session()->has('LogInId')))
                                    <a class="dropdown-item" href="#">Edit</a>
                                    @endif
                                    <!-- Edit Button Code end here -->

                                    <a class="dropdown-item" href="{{route('DeleteAccount',$Pdata->id)}}">Delete Account</a>

                                    <!-- Edit Button Code start from here -->
                                    @if (session()->has('LogInId'))
                                    <a class="dropdown-item" href="{{route('LogOutProcess')}}">Log Out</a>
                                    @endif
                                    <!-- Edit Button Code end here -->

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @if (session()->has('LogInId'))
                                    {{$Pdata->Name}}
                                    @endif
                                    @if (!(session()->has('LogInId')))
                                    user('Default')
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @if (session()->has('LogInId'))
                                    {{$Pdata->Email}}
                                    @endif
                                    @if (!(session()->has('LogInId')))
                                    user@gmail.com('Default')
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date Of Birth</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    @if (session()->has('LogInId'))
                                    {{$Pdata->DOB}}
                                    @endif
                                    @if (!(session()->has('LogInId')))
                                    20 / 03 / 2008('Default')
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @if (session()->has('LogInId'))
                                    {{$Pdata->Phone}}
                                    @endif
                                    @if (!(session()->has('LogInId')))
                                    20 / 03 / 2008('Default')
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @if (session()->has('LogInId'))
                                    {{$Pdata->Address}}
                                    @endif
                                    @if (!(session()->has('LogInId')))
                                    Bay Area, San Francisco, CA('Default')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection