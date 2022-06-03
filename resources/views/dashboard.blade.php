<x-app-layout>
    @if ($message = Session::get('success'))
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p>{{ $message }}</p>
        </div>
    </div>
    @endif

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('vehicles.store') }}">
                        @csrf

                        <div>
                            <x-label for="vehicle" :value="__('Vehicle')" />
                            <x-input id="vehicle" class="block mt-1 w-full" type="text" name="vehicle"
                                :value="old('vehicle')" required autofocus />
                        </div>
                        <div>
                            <x-label for="model" :value="__('Model')" />
                            <x-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')"
                                required />
                        </div>
                        <div>
                            <x-label for="year" :value="__('Year of Manufacture')" />
                            <x-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')"
                                required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if($admin)
                    <h1>All Vehicles</h1>
                    @else
                    <h1>My Vehicles</h1>
                    @endif

                    <table class="table-fixed w-full shadow-md rounded p-2">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="text-center font-bold">Vehicle</th>
                                <th class="text-center font-bold">Model</th>
                                <th class="text-center font-bold">Year</th>
                                @if($admin)
                                <th class="text-center font-bold">Entered By</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                            @foreach ($vehicles as $vehicle)
                            <tr class="border-b-2 py-12">
                                <td class="text-center">{{ $vehicle->vehicle }}</td>
                                <td class="text-center">{{ $vehicle->model }}</td>
                                <td class="text-center">{{ $vehicle->year }}</td>
                                @if($admin)
                                <td class="text-center">{{ $vehicle->entered_by->username }}</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
