<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        /* Add your custom table styles here */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 16px;
            color: #333;
            text-align: center;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid white;
            border-radius: 4px;
        }

        th {
            background-color: #2a5699;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashing
        </h2>
    </x-slot>

    <div class="py-12" style="background-color: #2a2f4a";>
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
                                            @if ($reserve->status != 'approved' && $reserve->status != 'declined')
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
                                            @endif
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
<div class="py-12" style="background-color: #2a2f4a";>
</div>
<div class="py-12" style="background-color: #2a2f4a";>
</div>
<div class="py-12" style="background-color: #2a2f4a";>
</div>
<script>
    @if(session('success'))
        alert("{{ session('success') }}");
    @endif

    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
</script>
</body>
</html>