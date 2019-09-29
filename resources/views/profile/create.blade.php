@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Profile</div>
                <div class="card-body">
                    <form action="{{ route('profiles.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="student_id" value="{{ $student->id }}">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="profileAddress">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Image</label>
                            <input type="file" name="profileImage">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>

        </div>
    </div>
@endsection

