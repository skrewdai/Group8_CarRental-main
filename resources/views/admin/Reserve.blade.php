<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashing
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-xl font-semibold mb-2">All Reservations</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Pickup Location</th>
                                    <th scope="col">Return Location</th>
                                    <th scope="col">Pickup Date</th>
                                    <th scope="col">Return Date</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Car</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reserve)
                                    <tr>
                                        <th scope="row">{{$reserve->id}}</th>
                                        <td>{{$reserve->pickup}} </td>
                                        <td>{{$reserve->return}} </td>
                                        <td>{{ \Carbon\Carbon::parse($reserve->pickdate)->format('Y-m-d h:i:s A') }} </td>
                                        <td>{{ \Carbon\Carbon::parse($reserve->retdate)->format('Y-m-d h:i:s A') }} </td>
                                        <td>{{$reserve->fname}} </td>
                                        <td>{{$reserve->email}} </td>
                                        <td>{{$reserve->phone}} </td>
                                        <td>{{$reserve->car}} </td>
                                        <td>{{$reserve->status}} </td>

                                        <td>
                                            <form method="post" action="{{ route('reservation.approve', $reserve->id) }}" style="display:inline;">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-outline-success">
                                                    Approve
                                                </button>
                                            </form>
                                            <form method="post" action="{{ route('reservation.decline', $reserve->id) }}" style="display:inline;">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-outline-danger">
                                                    Decline
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mb-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-xl font-semibold mb-2">Approved Reservations</h2>
                    </div>
                    <div class="card-body">
                        @foreach($reservations->where('status', 'approved') as $reserve)
                            <div class="mb-4">
                                <div><b>Id:</b> {{$reserve->id}}</div>
                                <!-- Add more fields if needed -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2 class="text-xl font-semibold mb-2">Declined Reservations</h2>
                </div>
                <div class="card-body">
                    @foreach($reservations->where('status', 'declined') as $reserve)
                        <div class="mb-4">
                            <div><b>Id:</b> {{$reserve->id}}</div>
                            <!-- Add more fields if needed -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>