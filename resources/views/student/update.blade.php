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
                        <form action="{{ route('students.update',$student->id) }}" method="post">
                            @method('put')
                            @csrf
                            <input type="hidden" name="student_id" value="{{ $student->id }}">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="studentName"
                                           value="{{ $student->studentName }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Full Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="fullName"
                                           value="@if($student->profile != null){{ $student->profile->fullName }}@else{{'Full Name'}}@endif">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Age</label>

                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="studentAge"
                                           value="{{ $student->studentAge }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="studentPhone"
                                           value="{{ $student->studentPhone }}">
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
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Father Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="fatherName"
                                           value="@if($student->profile != null){{ $student->profile->fatherName }}@else{{'Father Name'}}@endif">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Mother Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="motherName"
                                           value="@if($student->profile != null){{  $student->profile->motherName  }}@else{{'Mother Name'}}@endif">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Address</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="profileAddress"
                                           value="@if($student->profile != null){{ $student->profile->profileAddress }}@else{{'Address'}}@endif">
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
