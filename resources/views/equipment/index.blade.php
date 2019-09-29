@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="background-color: #117a8b">
            <div class="card col-md-10" style="background-color: #c8cbcf">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="pr-5"><h3>Equipments List</h3>
                        </div>
                        <div class="pr-5"><a href="" class="btn btn-success">Add Equipment</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-active">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Equipment Name</th>
                            <th scope="col">Equipment Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($equipments as $key => $equipment)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $equipment->equipName }}</td>
                                <td>{{ $equipment->equipAmount }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
