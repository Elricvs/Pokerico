<x-guest-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="font-bold text-2xl mb-4 capitalize text-center">N°{{ $pokemon->id }} {{ $pokemon->name }}</h1>

        <div class="flex items-center justify-center mb-6">
            <img src="{{ asset($pokemon->imgurl) }}" alt="{{ $pokemon->name }}" class="rounded shadow-lg object-cover object-center w-64 h-64" />
        </div>

        <div class="flex justify-center space-x-2 mb-6">
            <img class="h-8" src="{{ asset($pokemon->type1->imgurl) }}" alt="{{ $pokemon->type1->name }}" />
            @if($pokemon->type2 !== null)
                <img class="h-8" src="{{ asset($pokemon->type2->imgurl) }}" alt="{{ $pokemon->type2->name }}" />
            @endif
        </div>

        <h3 class="font-bold text-xl mb-4 text-center">Description</h3>
        <p class="text-center mb-6">{{ $pokemon->description }}</p>

        <h3 class="font-bold text-xl mb-4 text-center">Statistiques de base</h3>
        <div class="grid grid-cols-2 gap-6 mb-6">
            @php
                $maxStat = 255;
            @endphp
            <div>
                <p>Points de vie: {{ $pokemon->hp }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                    <div class="bg-green-500 h-4 rounded-full" style="width: {{ ($pokemon->hp / $maxStat) * 100 }}%;"></div>
                </div>
                <p>Attaque: {{ $pokemon->att }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                    <div class="bg-red-500 h-4 rounded-full" style="width: {{ ($pokemon->att / $maxStat) * 100 }}%;"></div>
                </div>
                <p>Défense: {{ $pokemon->def }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                    <div class="bg-blue-500 h-4 rounded-full" style="width: {{ ($pokemon->def / $maxStat) * 100 }}%;"></div>
                </div>
                <p>Taille: {{ $pokemon->size }} m</p>
            </div>
            <div>
                <p>Attaque spéciale: {{ $pokemon->attspe }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                    <div class="bg-yellow-500 h-4 rounded-full" style="width: {{ ($pokemon->attspe / $maxStat) * 100 }}%;"></div>
                </div>
                <p>Défense spéciale: {{ $pokemon->defspe }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                    <div class="bg-purple-500 h-4 rounded-full" style="width: {{ ($pokemon->defspe / $maxStat) * 100 }}%;"></div>
                </div>
                <p>Vitesse: {{ $pokemon->vit }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                    <div class="bg-orange-500 h-4 rounded-full" style="width: {{ ($pokemon->vit / $maxStat) * 100 }}%;"></div>
                </div>
                <p>Poids: {{ $pokemon->weight }} kg</p>
            </div>
        </div>

        <h3 class="font-bold text-xl mb-4 text-center">Attaques</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Nom</th>
                        <th class="px-4 py-2 border-b">Type</th>
                        <th class="px-4 py-2 border-b">Description</th>
                        <th class="px-4 py-2 border-b">Puissance</th>
                        <th class="px-4 py-2 border-b">Précision</th>
                        <th class="px-4 py-2 border-b">PP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pokemon->attacks as $attack)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $attack->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $attack->type->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $attack->description }}</td>
                        <td class="px-4 py-2 border-b">{{ $attack->puissance }}</td>
                        <td class="px-4 py-2 border-b">{{ $attack->precision }}</td>
                        <td class="px-4 py-2 border-b">{{ $attack->PP }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8 flex items-center justify-center">
            <a href="{{ route('front.pokemon.index') }}" class="font-bold bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 transition">
                Retour au Pokédex
            </a>
        </div>
    </div>
</x-guest-layout>