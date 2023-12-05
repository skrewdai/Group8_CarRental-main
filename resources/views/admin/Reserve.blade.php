<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashing
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reserve)
                        <tr>
                            <th scope="row">{{$reserve->id}}</th>
                            <td>{{$reserve->pickup}} </td>
                            <td>{{$reserve->return}} </td>
                            <td>{{$reserve->pickdate}} </td>
                            <td>{{$reserve->retdate}} </td>
                            <td>{{$reserve->fname}} </td>
                            <td>{{$reserve->email}} </td>
                            <td>{{$reserve->phone}} </td>
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-2">Approved Reservations</h2>
                <table class="min-w-full bg-white border border-gray-300">
                    <!-- ... table headers ... -->
                    <tbody>
                        @foreach($reservations->where('status', 'approved') as $reserve)
                            <tr>
                                <!-- ... other columns ... -->
                                <td class="py-2 px-4 border-b">{{ $reserve->phone }}</td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-2">Declined Reservations</h2>
                <table class="min-w-full bg-white border border-gray-300">
                    <!-- ... table headers ... -->
                    <tbody>
                        @foreach($reservations->where('status', 'declined') as $reserve)
                            <tr>
                                <!-- ... other columns ... -->
                                <td class="py-2 px-4 border-b">{{ $reserve->phone }}</td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
