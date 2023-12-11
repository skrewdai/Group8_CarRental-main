<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashing
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title"><b>Testify Form</b></h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('feedback') }}">
                            @csrf <!-- CSRF Protection -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}" readonly required="">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Notes</label>
                                <textarea class="form-control" name="message" id="message" rows="6" required></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
