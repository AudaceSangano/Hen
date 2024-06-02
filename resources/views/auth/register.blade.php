<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login | PU-BS - Poultry Upper-balance System </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:400,600,700')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css')}}">
</head>
<body class="form">

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Get started with a <br/> free account</h1>
                        <p class="signup-link">Already have an account? <a href="{{ route('auth.login.form') }}">Log in</a></p>
                        <form class="text-left" action="{{ route('auth.register') }}" method="POST">
                            @csrf
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Username">

                                    @error('username')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div id="username-field" class="field-wrapper input">
                                        <label for="inputCity">Role</label>
                                        <select name="role" class="form-control form-control-sm   @error('province_id') is-invalid @enderror" value="{{ old('role') }}">
                                            <option value="">--Select--</option>
                                            <?php
                                            $variable = App\Models\Role::all();
                                            foreach ($variable as $value) {
                                                if ($value->name!="admin") {
                                                ?>
                                            <option value="<?=$value->role_id?>"><?=$value->name?></option>
                                            <?php
                                                }else {
                                                    continue;
                                                }
                                            }
                                            ?>
                                        </select>
                                        @error('role')
                                        <span role="alert">
                                            <strong class="text-danger">{{$message.old('province_id')}}</strong>
                                         </span>
                                        @enderror
                                </div>

                                <div id="username-field" class="field-wrapper input">
                                        <label for="inputCity">Telephone</label>
                                        <input id="email" name="telephone" type="text" value="" placeholder="250780000000">
                                        @error('telephone')
                                        <span role="alert">
                                            <strong class="text-danger">{{$message.old('province_id')}}</strong>
                                         </span>
                                        @enderror
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">Province</label>
                                        <select name="province" class="form-control form-control-sm   @error('province_id') is-invalid @enderror" id="province" value="{{ old('province_id') }}">
                                            <option value="">--Select--</option>
                                        </select>
                                        @error('province')
                                        <span role="alert">
                                            <strong class="text-danger">{{$message.old('province_id')}}</strong>
                                         </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">District</label>
                                        <select name="district" id="district" class="form-control">
                                            <option value="">--Select--</option>
                                        </select>
                                        @error('district')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputZip">Sector</label>
                                        <select name="sector" id="sector" class="form-control">
                                            <option value="">--Select--</option>
                                        </select>
                                        @error('sector')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="text" value="" placeholder="Email">

                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" value="" placeholder="Password">

                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="green" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password_confirmation" type="password" value="" placeholder="Password_confirmation">

                                    @error('password_confirmation')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field-wrapper terms_condition">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input" required>
                                          <span class="new-control-indicator"></span><span>I agree to the <a href="javascript:void(0);">  terms and conditions </a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Get Started!</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    <p class="">Copyright © 2022 <a target="_blank" href="http://audace.getrwa.com">DesignReset</a>, All rights reserved.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/authentication/form-1.js')}}"></script>

</body>
</html>
<script>
    //select all  province

    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "{{url('getProvince')}}",
            success: function (response) {
                var province = response;
                var option = '';
                for (var i = 0; i < province.length; i++) {
                    option += '<option value="' + province[i].id + '">' + province[i].name + '</option>';
                }
                $('#province').append(option);
            }
        });
    });
    //select all district

    $(document).ready(function(){
        $('#province').on('change',function(){
            var province_id = $(this).val();
            if(province_id){
                $.ajax({
                    type: "GET",
                    url: '{{ "/getDistrict/"}}'+province_id,
                    success: function (response) {
                        var district = response;
                        var option = '';
                        for (var i = 0; i < district.length; i++) {
                            option += '<option value="' + district[i].district_id + '">' + district[i].district_name + '</option>';
                        }

                        $('#district').html(option);

                    }
                });
            }
            else
            {

                $('#district').html('<option value="">Select District</option>');
            }
        });
    });
    //select all sector

    $(document).ready(function(){
        $('#district').on('change',function(){
            var district_id = $(this).val();
            if(district_id){
                $.ajax({
                    type: "GET",
                    url: '{{ "/getSector/"}}' + district_id,
                    success: function (response) {
                        var sector = response;
                        var option = '';
                        for (var i = 0; i < sector.length; i++) {
                            option += '<option value="' + sector[i].sector_id + '">' + sector[i].sector_name + '</option>';
                        }
                        $('#sector').html(option);
                    }
                });
            }
            else{
                //
                $('#sector').html('<option value="">Select Sector</option>');
            }
        });
    });

</script>
