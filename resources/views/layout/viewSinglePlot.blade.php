@extends('inc.main')
@section('content')
<div class="layout-px-spacing">
<div class="row">
    <div id="flFormsGrid" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Forms For Product Modification</h4>
                    </div>
                </div>
            </div>
                <form action="{{ route('product.update') }}" method="POST">
                    @csrf
                    <div class="form-row mb-4">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Product</label>
                            <select name="product_type" id="" class="form-control" >
                                <?php
                                $variable = App\Models\Category::all();
                                foreach ($variable as $value) {
                                    if ($value->category_id==$data->category_id) {
                                    ?>
                                        <option value="<?=$value->category_id?>" selected><?=$value->cat_name?></option>
                                    <?php
                                    }else {
                                    ?>
                                        <option value="<?=$value->category_id?>"><?=$value->cat_name?></option>
                                    <?php
                                    }
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
                            <input type="text" name="product_telephone" class="form-control" id="inputEmail4" value="{{ $data->telephone }}">
                            <input type="hidden" name="id" class="form-control" id="inputEmail4" value="{{ $data->product_id }}">

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
                            <input type="number" name="product_quantity" class="form-control" id="inputEmail4" value="{{ $data->quantity }}">

                            @error('product_quantity')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Price per Unit</label>
                            <input type="text" name="price_per_unit" class="form-control" id="inputPassword4" value="{{ $data->price }}">

                            @error('price_per_unit')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="inputPassword4" value="{{ $data->name }}">

                            @error('product_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  <button type="submit" class="btn btn-primary mt-3">Update Information</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
