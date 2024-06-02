@extends('inc.main')
@section('content')
<div class="layout-px-spacing">
<div class="row">
    <div id="flFormsGrid" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Forms For Product Registration</h4>
                    </div>
                </div>
            </div>
                <form action="{{ route('product.register') }}" method="POST">
                    @csrf
                    <div class="form-row mb-4">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Product</label>
                            <select name="product_type" id="" class="form-control" >
                                <option value="" selected disabled>--Select Prod. Type--</option>
                                <?php
                                $variable = App\Models\Category::all();
                                foreach ($variable as $value) {
                                    ?>
                                <option value="<?=$value->category_id?>"><?=$value->cat_name?></option>
                                <?php
                                }
                                ?>
                            </select>

                            @error('product_type')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Phone</label>
                            <input type="text" name="product_telephone" class="form-control" id="inputEmail4" placeholder="250783503691">

                            @error('product_telephone')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Email</label>
                            <input type="text" name="product_email" class="form-control" id="inputPassword4" readonly value="<?=Auth::user()->email?>">

                            @error('product_email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Product Quanity</label>
                            <input type="number" name="product_quantity" class="form-control" id="inputEmail4" placeholder="Total Quantity">

                            @error('product_quantity')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Price per Unit</label>
                            <input type="text" name="price_per_unit" class="form-control" id="inputPassword4" placeholder="Rwf">

                            @error('price_per_unit')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="inputPassword4" placeholder="Amanyarwanda">

                            @error('product_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  <button type="submit" class="btn btn-primary mt-3">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('css')
<script src="{{ asset('assets/jquery-3.6.0.min.js') }}"></script>
<script>

        const settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://rwanda.p.rapidapi.com/districts?p=kigali",
            "method": "GET",
            "headers": {
                "X-RapidAPI-Key": "d9b72e65d7msh5fbb9dc831ec368p1ba689jsnffbab6d9ab0e",
                "X-RapidAPI-Host": "rwanda.p.rapidapi.com"
            }
        };

        $.ajax(settings).done(function(response) {
            var dd = response.data;
            $.each(dd, function(index, value) {
                optionText = value;
                optionValue = value;

                $('#district').append($('<option>').val(optionValue).text(optionText));
            });

        });


        $(document).ready(function() {
            // Country dependent ajax
            $("#district").on("change", function() {
                $("#sector").empty();
                $('#sector').append($('<option>').text("Sectors Successfull roaded"));
                var districtId = $(this).val();

                const settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://rwanda.p.rapidapi.com/sectors?p=kigali&d=" + districtId,
                    "method": "GET",
                    "headers": {
                        "X-RapidAPI-Key": "d9b72e65d7msh5fbb9dc831ec368p1ba689jsnffbab6d9ab0e",
                        "X-RapidAPI-Host": "rwanda.p.rapidapi.com"
                    }
                };

                $.ajax(settings).done(function(response) {
                    var dd = response.data;
                    $.each(dd, function(index, value) {
                        optionText = value;
                        optionValue = value;
                        $('#sector').append($('<option>').val(optionValue).text(
                            optionText));
                    });
                });
            });
        });

        $(document).ready(function() {
            // Country dependent ajax
            $("#district") && $("#sector").on("change", function() {
                $("#cell").empty();
                $('#cell').append($('<option>').text("Cells Successfull roaded"));
                var districtId = $('#district').val();
                var secrtorId = $('#sector').val();
                const settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://rwanda.p.rapidapi.com/cells?p=kigali&d=" + districtId + "&s=" + secrtorId,
                    "method": "GET",
                    "headers": {
                        "X-RapidAPI-Key": "d9b72e65d7msh5fbb9dc831ec368p1ba689jsnffbab6d9ab0e",
                        "X-RapidAPI-Host": "rwanda.p.rapidapi.com"
                    }
                };


                $.ajax(settings).done(function(response) {
                    var dd1 = response.data;
                    console.log(dd1);
                    $.each(dd1, function(index, value) {
                        optionText = value;
                        optionValue = value;

                        $('#cell').append($('<option>').val(optionValue).text(
                            optionText));
                    });
                });


            });
        });

        $("#province") && $("#district") && $("#sector") && $("#cell").on("change", function() {
                $("#village").empty();
                $('#village').append($('<option>').text("Village Successfull roaded"));
                var district = $('#district').val();
                var sector = $('#sector').val();
                var cell = $('#cell').val();
                const settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://rwanda.p.rapidapi.com/villages?p=kigali&d=" + district +
                        "&s=" + sector + "&c=" + cell,
                    "method": "GET",
                    "headers": {
                        "X-RapidAPI-Key": "d9b72e65d7msh5fbb9dc831ec368p1ba689jsnffbab6d9ab0e",
                        "X-RapidAPI-Host": "rwanda.p.rapidapi.com"
                    }
                };


                $.ajax(settings).done(function(response) {
                    var dd1 = response.data;
                    console.log(dd1);
                    $.each(dd1, function(index, value) {
                        optionText = value;
                        optionValue = value;

                        $('#village').append($('<option>').val(optionValue).text(
                            optionText));
                    });
                });


            });
</script>
@endsection
