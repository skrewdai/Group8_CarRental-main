<x-app-layout>
    <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Approved Reservations
          </h2>
    </x-slot>
  
  <!-- resources/views/user/approved_reservations.blade.php -->
  @section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  @endsection
    <!-- ... header and other content ... -->
    <div class="modal-body">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title"><b>Reservation Form</b></h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('reserve') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pickup">Pick-up location</label>
                    <input type="text" class="form-control" id="pickup" name="pickup" required="">
                </div>

                <div class="form-group col-md-6">
                    <label for="return">Return location</label>
                    <input type="text" class="form-control" id="return" name="return" required="">
                </div>

                <div class="form-group col-md-6">
                    <label for="pickdate">Pick-up date/time</label>
                    <input type="datetime-local" class="form-control" id="pickdate" name="datetime" required="">
                </div>

                <div class="form-group col-md-6">
                    <label for="retdate">Return date/time</label>
                    <input type="datetime-local" class="form-control" id="retdate" name="datetime1" required="">
                </div>

                <div class="form-group col-md-12">
                    <label for="fname">Enter full name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="{{ Auth::user()->name }}" readonly required="">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Enter email address</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly required="">
                </div>

                <div class="form-group col-md-6">
                    <label for="phone">Enter phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required="">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
        </form>
    </div>
</div>

    </div>
    </div>
  </x-app-layout>
  
  
