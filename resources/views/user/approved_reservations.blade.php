<x-app-layout>
    <!-- ... header and other content ... -->

    <div class="modal-body">
        <form method="POST" action="{{route('reserve')}}">
          @csrf <!-- CSRF Protection -->
            <div class="fields">
                <div class="field half">
                    <label for="field-1">Pick-up location</label>

                    <input type="text" id="pickup" name="pickup" required="">
                </div>

                <div class="field half">
                    <label for="field-2">Return location</label>

                    <input type="text" id="return" name="return" required="">
                </div>

                <div class="field half">
                    <label for="field-3">Pick-up date/time</label>

                    <!-- <input type="text" id="pickdate" name="pickdate" required=""> -->
                  <input type="datetime-local" id="pickdate" name="datetime"> 
                </div>

                <div class="field half">
                    <label for="field-4">Return date/time</label>

                    <!-- <input type="text" id="retdate" name="retdate" required=""> -->
                  <input type="datetime-local" id="retdate" name="datetime1"> 
                </div>

                <div class="field">
                    <label for="field-5">Enter full name</label>

                     <input type="text" id="fname" name="fname" required="">
                </div>

                <div class="field half">
                    <label for="field-6">Enter email address</label>

                    <input type="text" id="email" name="email" required="">
                </div>

                <div class="field half">
                    <label for="field-6">Enter phone</label>

                    <input type="text" id="phone" name="phone" required="">
                </div>
              <div class="modal-footer">
                  <button type="button" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Book Now</button>
              </div>
            </div>
        </form>
    </div>
</x-app-layout>
