@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #cbd3da">
                    <div class="card-header">
                        <strong>Update Electric
                            <p>Room: {{ $electric->roomNumber }}</p>
                            <p>Date: {{ date('y-m-d') }}</p></strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('electrics.update',$electric->id) }}">
                            @method('put')
                            @csrf
                            <div class="form-group row">

                                <label for="" class="col-md-4 col-form-label text-md-right">Date</label>
                                <div class="col-md-5">
                                    <input disabled class="form-control" name="updated_at"  value="{{ date('y-m-d') }}">
                                </div>
                            </div>


                            <div class="form-group row">

                                <label for="" class="col-md-4 col-form-label text-md-right">Current Month</label>
                                <div class="col-md-5">
                                    <input type="number" class="form-control" name="currentMonth" required value="{{
                                    old('currentMonth')
                                     }}">
                                    @if($errors->has('currentMonth'))
                                        {{ $errors->first('currentMonth') }}
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
