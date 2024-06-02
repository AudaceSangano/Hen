@extends('inc.main')
@section('auddy')

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css')}}">
    <link href="{{ asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endsection
@section('content')

<div class="layout-px-spacing">

    <div class="account-settings-container layout-top-spacing">

        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="general-info" method="post" action="{{ route('profile.update.operation') }}" class="section general-info">
                            @csrf
                            <div class="info">
                                <h6 class="">General Information</h6>
                                <div class="row">
                                    <div class="col-md-12 text-right mb-5">
                                        <button id="add-work-platforms" class="btn btn-primary">Save Change</button>
                                    </div>
                                    <div class="col-lg-12 mx-auto">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <input type="text" name="name" class="form-control mb-4" id="fullName" value="{{ $data->name }}">

                                                                @error('name')
                                                                    <span class="text-danger" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Email</label>
                                                                <input type="text" name="email" class="form-control mb-4" id="email" value="{{ $data->email }}">

                                                                @error('email')
                                                                    <span class="text-danger" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profession">Telephone</label>
                                                        <input type="text" name="telephone" class="form-control mb-4" id="position" value="{{ $data->telephone }}">

                                                        @error('telephone')
                                                            <span class="text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="general-info" action="{{route('profile.update.operation.security')}}" method="post" class="section general-info">
                            @csrf
                            <div class="info">
                                <h6 class="">Security Information</h6>
                                <div class="row">
                                    <div class="col-lg-11 mx-auto">
                                        <div class="row">
                                            <div class="col-md-12 text-right mb-5">
                                                <button id="add-work-platforms" class="btn btn-primary">Save Change</button>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label for="profession">Old Password</label>
                                                        <input type="Password" name="old_password" class="form-control mb-4" id="password" placeholder="Old Passsword">

                                                        @error('old_password')
                                                            <span class="text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input type="password" name="password" class="form-control mb-4" placeholder="New Password">

                                                                @error('password')
                                                                    <span class="text-danger" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Confirm Password</label>
                                                                <input type="password" name="password_confirmation" class="form-control mb-4" placeholder="Confirmation Password">

                                                                @error('password_confirmation')
                                                                    <span class="text-danger" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="{{ asset('plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{ asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{ asset('assets/js/users/account-settings.js')}}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
@endsection
