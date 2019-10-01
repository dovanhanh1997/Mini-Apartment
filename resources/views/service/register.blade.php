@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8" style="background-color: darksalmon">
            <div class="card">
                <div class="card-header" style="background-color: #c8cbcf"><strong><h3>Service Register</h3></strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('addService',$id) }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right">Service</label>
                                    <div class="col-md-6">
                                        <select name="serviceId" id="">
                                            @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->serviceName }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            Service Cost
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Service Cost</th>
                                    </tr>
                                </thead>
                                <tbody class="table-dark">
                                @foreach($services as $key => $service)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $service->serviceName.'/'.$service->unit }}</td>
                                        <td>{{ number_format($service->servicePrice).' VND' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form>
                        <input class="btn btn-dark" type="button" value="Back" onClick="history.go(-1)"/>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

