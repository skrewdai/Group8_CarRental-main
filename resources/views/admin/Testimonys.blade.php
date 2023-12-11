<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title"><b>Feedback Management</b></h5>
                    </div>
                    <div class="card-body">
                        <!-- Display Feedbacks -->
                        <h5 class="card-title mb-4"><b>Feedbacks</b></h5>
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
    </div>
</x-app-layout>
