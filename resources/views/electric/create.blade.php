@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Electric</div>
                <div class="card-body">
                    <form action="{{ route('electrics.store') }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Room Number</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="roomNumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" >Previous Month</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="previousMonth" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Current Month</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="currentMonth" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

