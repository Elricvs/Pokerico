<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un Type') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between mt-8">
                <div class="text-2xl">
                    Créer un Type
                </div>
            </div>

            <form method="POST" action="{{ route('type.store') }}" class="flex flex-col space-y-4 text-gray-500" enctype="multipart/form-data">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="imgurl" :value="__('Image URL')" />
                    <x-text-input id="imgurl" class="block mt-1 w-full" type="file" name="imgurl" :value="old('imgurl')" />
                    <x-input-error :messages="$errors->get('imgurl')" class="mt-2" />
                </div>
               
                <div class="flex justify-end">
                    <x-primary-button id="create" type="submit">
                        {{ __('Créer') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
