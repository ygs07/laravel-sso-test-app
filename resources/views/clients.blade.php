<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    'Your clients are here'
                    @foreach ($clients as $client)
                        <div class="py-3 ">

                            <p>{{ $client->id }}</p>
                            <p>{{ $client->name }}</p>
                            <p>{{ $client->redirect }}</p>
                            <p>{{ $client->secret }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 pl-4 ">
                    <form action="/oauth/clients" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('name')" />

                            <x-text-input for="name" type="text" name="name" :value="old('name')" />
                        </div>
                        <div>
                            <x-input-label for="redirect" :value="__('redirect')" />

                            <x-text-input for="name" type="text" name="redirect" :value="old('redirect')" />
                        </div>
                        <div>

                            <x-primary-button type="submit"> Create Client </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
