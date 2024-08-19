<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un Type') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between mt-8">
                <div class="text-2xl">
                    Modifier un Type
                </div>
            </div>

            <div class="text-gray-500">
                <form method="POST" action="{{ route('type.update', $type) }}" class="flex flex-col space-y-4" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Nom')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name', $type->name)" autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="imgurl" :value="__('Image')" />
                        @if ($type->imgurl)
                            <img src="{{ asset($type->imgurl) }}" alt="Image du type"
                            class="aspect-auto h-64 rounded shadow mt-2 mb-4 object-cover object-center">
                        @endif
                        <x-text-input id="imgurl" class="block mt-1 w-full" type="text" name="imgurl"
                        :value="old('imgurl', $type->imgurl)" />
                        <x-input-error :messages="$errors->get('imgurl')" class="mt-2" />
                    </div>         
                
                    <div class="flex justify-end">
                        <x-primary-button type="submit">
                            {{ __('Modifier') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>