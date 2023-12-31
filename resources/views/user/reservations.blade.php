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
        .btn.btn-primary {
        background-color: #2a5699;
        color: #fff;
        }


        .btn.btn-secondary {
        background-color: #bf0505;
        color: #fff;
        }
    </style>
</head>

<body>
<x-app-layout>
    <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Reserve
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
    <div class="py-12" style="background-color: #2a2f4a";>
    <div class="modal-body">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title"><b>Reservation Form</b></h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('reserve') }}" id="reservationForm">
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
                    <input type="datetime-local" class="form-control" id="pickdate" name="datetime" required="" step="1800">
                </div>

                <div class="form-group col-md-6">
                    <label for="retdate">Return date/time</label>
                    <input type="datetime-local" class="form-control" id="retdate" name="datetime1" required="" step="1800">
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
                    <input type="tel" class="form-control" id="phone" name="phone" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="car">Select a Car</label>
                    <select class="form-control" id="car" name="car" required="">
                        <option value="Honda City">Honda City</option>
                        <option value="Toyota Vios">Toyota Vios</option>
                        <option value="Mazda 2">Mazda 2</option>
                        <option value="Mitsubishi Mirage">Mitsubishi Mirage</option>
                        <option value="Toyota Avanza">Toyota Avanza</option>
                        <option value="Honda BRV">Honda BRV</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetForm()">Cancel</button>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
        </form>
    </div>
</div>
<div class="py-12" style="background-color: #2a2f4a";>
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
        
        function resetForm() {
            document.getElementById('reservationForm').reset();
        }

        // Ensure pick-up and return dates are within the allowed time range
        function validateDateTime() {
        var pickDate = new Date(document.getElementById('pickdate').value);
        var returnDate = new Date(document.getElementById('retdate').value);

        var pickTime = pickDate.getHours();
        var returnTime = returnDate.getHours();

        if (pickTime < 8 || pickTime >= 22 || returnTime < 8 || returnTime >= 22) {
            alert('Please select pick-up and return times between 8 am and 10 pm.');
            return false;
        }

        return true;
    }

    // Add an event listener to the form to trigger the validation function
    document.getElementById('reservationForm').addEventListener('submit', function (event) {
        if (!validateDateTime()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

</script>
</body>

</html>