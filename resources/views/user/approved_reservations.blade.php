<x-app-layout>
    <!-- ... header and other content ... -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold mb-2">Approved Reservations</h2>
            <table class="min-w-full bg-white border border-gray-300">
                <!-- ... table headers ... -->
                <tbody>
                    @foreach($approvedReservations as $reserve)
                        <tr>
                            <!-- ... other columns ... -->
                            <td class="py-2 px-4 border-b">{{ $reserve->phone }}</td>
                        </tr>
                    @endforeach 

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
