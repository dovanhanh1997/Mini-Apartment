@extends('layouts/app')
@section('content')
    <div class="container">
        <h3>Profiles</h3>
        <div class="row">
            <div class="col">
                <table class="table table-dark" border="1px">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Mother Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($profiles as $key => $profile)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $profile->fullName }}</td>
                                <td>{{ $profile->fatherName }}</td>
                                <td>{{ $profile->motherName }}</td>
                                <td>{{ $profile->profileAddress }}</td>
                                <td>{{ $profile->image }}</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
