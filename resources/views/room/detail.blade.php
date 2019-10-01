@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row justify-content-center" style="background-color: #383d41">
            <div class="card col-md-8">
                <div class="card-header">
                    <h3>Room Information: {{ $room->roomNumber }}</h3>
                </div>
                <div class="card-body">
                    <table class="table-dark col-md-5">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Room Number:</td>
                            <td>{{ $room->roomNumber }}</td>
                        </tr>
                        <tr>
                            <td>Room Size:</td>
                            <td>{{ $room->roomSize }}</td>
                        </tr>
                        <tr>
                            <td>Room Status:</td>
                            <td>{{ $room->status }}</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    <strong><p class="text-md-center">Room Student: {{ $room->students()->count() }}</p></strong>
                    <div class="" style="background-color: #6cb2eb">
                        <table class="table">
                            <thead class="table-hover">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Profile</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($room->students as $key => $student)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $student->studentName }}</td>
                                    <td>{{ $student->studentAge }}</td>
                                    <td>{{ $student->studentPhone }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>
                                        <a href="{{ route('students.show',$student->id) }}"
                                           class="btn btn-dark">Profile</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <strong><p class="text-md-center">Room Service: {{ $room->services()->count() }}
                            <a href="{{ route('services.edit',$room->id) }}"
                               class="btn btn-secondary">Register
                                Service</a></p></strong>
                    <div class="" style="background-color: #9561e2">
                        <table class="table">
                            <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Service Status</th>
                                <th scope="col">Service Price</th>
                                <th scope="col">Service Supplier</th>
                                <th scope="col">Service Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-bordered">
                            @foreach($room->services as $key => $service)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $service->serviceName }}</td>
                                    <td>{{ $service->serviceStatus }}</td>
                                    <td>{{ number_format($service->servicePrice).' VND/'.$service->unit }}</td>
                                    <td>{{ $service->serviceSupplier }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div
                                                class="pr-3">@if($service->serviceName !== 'Garbage' && $service->serviceName !== 'Internet')
                                                    <a
                                                        href="{{ route(strtolower($service->serviceName)."s.show",$room->roomNumber) }}"
                                                        class="btn btn-dark">Detail</a>
                                                @endif
                                            </div>
                                            <div class="pr-3">
                                                <form action="{{ route('detachService',$room->id) }}" method="post">
                                                    @csrf @method("delete")
                                                    <input type="hidden" name="serviceId" value="{{ $service->id }}"
                                                           onclick=" ">
                                                    <button type="submit" class="btn btn-danger"
                                                            onclick="return checkDelete()">
                                                        Cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <strong><p class="text-md-center">Room Equipment: {{$room->equipments()->count()}}</p></strong>
                    <div class="" style="background-color: #e9605c">
                        <table class="table">
                            <thead class="table-bordered">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Equipment Name</th>
                                <th scope="col">Equipment Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-bordered">
                            @foreach($room->equipments as $key => $equipment)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $equipment->equipName }}</td>
                                    <td>{{ $equipment->equipAmount }}</td>
                                    <td><a href="" class="btn btn-success">Report</a></td>
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
@endsection

<script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Do you really want to cancel this service');
    }
</script>
