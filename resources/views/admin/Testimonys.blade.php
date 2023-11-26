<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Testimonys
            
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
              @foreach($testimonys as $testimony)
                    <tr>
                        <th scope="row">{{$testimony->id}}</th>
                        <td>{{$testimony->name}} </td>
                        <td>{{$testimony->message}} </td>

                    </tr>
                @endforeach 
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>