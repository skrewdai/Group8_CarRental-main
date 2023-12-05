<x-app-layout>
    <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Approved Reservations
          </h2>
    </x-slot>
  
  <!-- resources/views/user/approved_reservations.blade.php -->
  
    <!-- ... header and other content ... -->
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table">
                <!-- ... table headers ... -->
                <tbody>
                    @section('content')
                    <h1>Your Approved Reservations</h1>
                
                    @if(count($reservations) > 0)
                        <ul>
                            @foreach($reservations as $reservation)
                                <li>{{ $reservation->pickup }} - {{ $reservation->return }}</li>
                                <!-- Add other reservation details as needed -->
                            @endforeach
                        </ul>
                    @else
                        <p>No approved reservations found.</p>
                    @endif
                @endsection
                </tbody>
            </table>
        </div>
    </div>
  </x-app-layout>
  
   