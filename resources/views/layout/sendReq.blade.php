@extends('inc.main')
@section('content')
<div class="layout-px-spacing">
<div class="row">
    <div id="flFormsGrid" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Forms For Plot Registration</h4>
                    </div>
                </div>
            </div>
                <form>
                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Plot</label>
                            <select name="plot" class="form-control">
                                <option selected>Choose Plot</option>
                                <?php
                                $plots = App\Models\User::find(Auth::id())->plots()->get();
                                ?>
                                @foreach ($plots as $plot)
                                <option value="">{{ $plot->plot_number }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Proposed Value</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Value in Rwf">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Reason</label>
                            <textarea class="form-control">
                            </textarea>
                        </div>
                    </div>
                  <button type="submit" cols="5" class="btn btn-primary mt-3">Send Request</button>
                </form>
        </div>
    </div>
</div>
</div>
@endsection
