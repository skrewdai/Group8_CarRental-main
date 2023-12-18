{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashing
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold mb-2">Your Reservations</h2>
            
            <div class="card mb-4">
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
                                <th scope="col">Car</th>
                                <th scope="col">Status</th>
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
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    @if(session('success'))
        alert("{{ session('success') }}");
    @endif

    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
</script> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
            <h1 class="text-xl font-semibold mb-2" style="color: white;">Your Reservations</h1>
            
            <div class="card mb-4">
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
                                <th scope="col">Car</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
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
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12" style="background-color: #2a2f4a";>
    </div>
    <div class="py-12" style="background-color: #2a2f4a";>
    </div>
    <div class="py-12" style="background-color: #2a2f4a";>
    </div>
    <div class="py-12" style="background-color: #2a2f4a";>
    </div>
    <div class="py-12" style="background-color: #2a2f4a";>
    </div>
    <div class="py-12" style="background-color: #2a2f4a";>
    </div>

</x-app-layout>
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