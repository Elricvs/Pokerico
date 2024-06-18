<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un Pokémon') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between mt-8">
                <div class="text-2xl">
                    Modifier un Pokémon
                </div>
            </div>

            <div class="text-gray-500">
                <form method="POST" action="{{ route('pokemon.update', $pokemon) }}" class="flex flex-col space-y-4" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Nom')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name', $pokemon->name)" autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="imgurl" :value="__('Image')" />
                        @if ($pokemon->imgurl)
                            <img src="{{ asset($pokemon->imgurl) }}" alt="Image du Pokémon"
                            class="aspect-auto h-64 rounded shadow mt-2 mb-4 object-cover object-center">
                        @endif
                        <x-text-input id="imgurl" class="block mt-1 w-full" type="text" name="imgurl"
                        :value="old('imgurl', $pokemon->imgurl)" />
                        <x-input-error :messages="$errors->get('imgurl')" class="mt-2" />
                    </div>


                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="description"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            name="description" rows="4">{{ old('description', $pokemon->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="hp" :value="__('HP')" />
                        <x-text-input id="hp" class="block mt-1 w-full" type="number" name="hp"
                            :value="old('hp', $pokemon->hp)" />
                        <x-input-error :messages="$errors->get('hp')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="att" :value="__('Attaque')" />
                        <x-text-input id="att" class="block mt-1 w-full" type="number" name="att"
                            :value="old('att', $pokemon->att)" />
                        <x-input-error :messages="$errors->get('att')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="def" :value="__('Défense')" />
                        <x-text-input id="def" class="block mt-1 w-full" type="number" name="def"
                            :value="old('def', $pokemon->def)" />
                        <x-input-error :messages="$errors->get('def')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="attspe" :value="__('Attaque Spéciale')" />
                        <x-text-input id="attspe" class="block mt-1 w-full" type="number" name="attspe"
                            :value="old('attspe', $pokemon->attspe)" />
                        <x-input-error :messages="$errors->get('attspe')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="defspe" :value="__('Défense Spéciale')" />
                        <x-text-input id="defspe" class="block mt-1 w-full" type="number" name="defspe"
                            :value="old('defspe', $pokemon->defspe)" />
                        <x-input-error :messages="$errors->get('defspe')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="vit" :value="__('Vitesse')" />
                        <x-text-input id="vit" class="block mt-1 w-full" type="number" name="vit"
                            :value="old('vit', $pokemon->vit)" />
                        <x-input-error :messages="$errors->get('vit')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="size" :value="__('Taille (m)')" />
                        <x-text-input id="size" class="block mt-1 w-full" type="number" step="0.01" name="size"
                            :value="old('size', $pokemon->size)" />
                        <x-input-error :messages="$errors->get('size')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="weight" :value="__('Poids (kg)')" />
                        <x-text-input id="weight" class="block mt-1 w-full" type="number" step="0.01" name="weight"
                            :value="old('weight', $pokemon->weight)" />
                        <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="type1_id" :value="__('Type 1')" />
                        <select id="type1_id" name="type1_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ old('type1_id', $pokemon->type1_id) == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('type1_id')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="type2_id" :value="__('Type 2')" />
                        <select id="type2_id" name="type2_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Aucun</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ old('type2_id', $pokemon->type2_id) == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('type2_id')" class="mt-2" />
                    </div>

                    <div>
                    <x-input-label for="attack1_id" :value="__('Attaque 1')" />
                    <select id="attack1_id" name="attack1_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">-</option>
                        @foreach($attacks as $attack)
                            <option value="{{ $attack->id }}" {{ old('attack1_id', $pokemon->attack1_id) == $attack->id ? 'selected' : '' }}>
                                {{ $attack->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('attack1_id')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="attack2_id" :value="__('Attaque 2')" />
                    <select id="attack2_id" name="attack2_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">-</option>
                        @foreach($attacks as $attack)
                            <option value="{{ $attack->id }}" {{ old('attack2_id', $pokemon->attack2_id) == $attack->id ? 'selected' : '' }}>
                                {{ $attack->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('attack2_id')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="attack3_id" :value="__('Attaque 3')" />
                    <select id="attack3_id" name="attack3_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">-</option>
                        @foreach($attacks as $attack)
                            <option value="{{ $attack->id }}" {{ old('attack3_id', $pokemon->attack3_id) == $attack->id ? 'selected' : '' }}>
                                {{ $attack->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('attack3_id')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="attack4_id" :value="__('Attaque 4')" />
                    <select id="attack4_id" name="attack4_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">-</option>
                        @foreach($attacks as $attack)
                            <option value="{{ $attack->id }}" {{ old('attack4_id', $pokemon->attack4_id) == $attack->id ? 'selected' : '' }}>
                                {{ $attack->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('attack4_id')" class="mt-2" />
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
