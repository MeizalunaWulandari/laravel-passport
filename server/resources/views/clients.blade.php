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
                    <p>Here are a list of you're clients:</p>
                    @foreach($clients as $client)
                        <div class="py-3 text-gray-900">
                            <h3 class="text-lg text-gray-500">{{ $client->name }}</h3>
                            <p><b>Client Id :</b> {{ $client->id }}<</p>
                            <p><b>Client Redirect :</b> {{ $client->redirect }}<</p>
                            <p><b>Client Secret< :</b> {{ $client->secret }}<</p>
                        </div>
                    @endforeach
                </div>
                <form action="/oauth/clients" method="POST">
                    @csrf
                    <div class="mt-2">
                        <label for="name" >Name</label>
                        <input type="text" name="name" placeholder="Client name">
                    </div>
                    <div class="mt-2">
                        <label for="redirect">Redirect</label>
                        <input type="text" name="redirect" placeholder="http://my-url.com/callback">
                    </div>
                    <div class="mt-2">
                        <button class="bg-gray-800 text-white p-2 rounded-md" type="submit">Create Client</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
