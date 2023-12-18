<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        /* Add your custom table styles here */
        .btn.btn-danger {
        background-color: #c91414;
        color: #fff;
    }

    /* Set button styles on hover */
    .btn.btn-danger:hover {
        background-color: #e90c0c; /* Set the desired dark blue color */
    }
    </style>
</head>

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>
    <div class="py-12" style="background-color: #2a2f4a";>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title"><b>Testimonys Management</b></h5>
                    </div>
                    <div class="card-body">
                        <!-- Display Feedbacks -->
                        <h5 class="card-title mb-4"><b>Testimonys</b></h5>
                        <ul class="list-group">
                            @foreach($testimonys as $testimony)
                                <li class="list-group-item">
                                    <strong>{{ $testimony->name }}</strong>: {{ $testimony->message }}
                                    <form class="float-end" method="post" action="{{ route('admin.deleteFeedback', $testimony->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>

        
                    </div>
                </div>
            </div>  
        </div>
        <div class="py-12" style="background-color: #2a2f4a";>
        </div>  
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