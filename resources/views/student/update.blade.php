@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #cbd3da">
                    <div class="card-header">
                        <strong>Update Information Student</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.update',$student->id) }}" method="post"
                              enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    Student Info
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Name</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="studentName"
                                                   placeholder="{{ $student->studentName }}" value="{{ old('studentName') }}">
                                            @if($errors->has('studentName'))
                                                {{ $errors->first('studentName') }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Age</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="studentAge" placeholder="{{
                                            $student->studentAge
                                             }}" value="{{ old('studentAge') }}">
                                            @if($errors->has('studentAge'))
                                                {{ $errors->first('studentAge') }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Phone</label>

                                        <div class="col-md-3">
                                            <input type="number" class="form-control" name="studentPhone" placeholder="{{
                                            $student->studentPhone
                                            }}" value="{{ old('studentPhone') }}"> @if($errors->has('studentPhone'))
                                                {{ $errors->first('studentPhone') }}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Gender</label>

                                        <div class="col-md-3">
                                            <select name="gender" id="">
                                                <option value="Male">Male</option>
                                                <option value="FeMale">FeMale</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    Profile Info
                                </div>

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Address</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="profileAddress" placeholder="{{
                                            $student->profile->profileAddress
                                            }}" value="{{ old('profileAddress') }}">
                                            @if($errors->has('profileAddress'))
                                                {{ $errors->first('profileAddress') }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Image</label>

                                        <input type="file" name="profileImage">
                                        @if($errors->has('profileImage'))
                                            {{ $errors->first('profileImage') }}
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
