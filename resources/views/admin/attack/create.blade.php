<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer une Attaque') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between mt-8">
                <div class="text-2xl">
                    Créer une Attaque
                </div>
            </div>

            <form method="POST" action="{{ route('attack.store') }}" class="flex flex-col space-y-4 text-gray-500">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="description" rows="4">{{ old('description') }}</textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="type_id" :value="__('Type')" />
                    <select id="type_id" name="type_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('type_id')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="puissance" :value="__('Puissance')" />
                    <x-text-input id="puissance" class="block mt-1 w-full" type="number" step="0.01" name="puissance" :value="old('puissance')" />
                    <x-input-error :messages="$errors->get('puissance')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="precision" :value="__('Précision')" />
                    <x-text-input id="precision" class="block mt-1 w-full" type="number" name="precision" :value="old('precision')" />
                    <x-input-error :messages="$errors->get('precision')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="PP" :value="__('PP')" />
                    <x-text-input id="PP" class="block mt-1 w-full" type="number" name="PP" :value="old('PP')" />
                    <x-input-error :messages="$errors->get('PP')" class="mt-2" />
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