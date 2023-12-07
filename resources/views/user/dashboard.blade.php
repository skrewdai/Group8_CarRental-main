<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashing
        </h2>
    </x-slot>
    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="text-xl font-semibold mb-2">All Reservations</h2>
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

                  </tr>
              @endforeach 
          </tbody>
          </table>

      </div>
</div>
</x-app-layout>


