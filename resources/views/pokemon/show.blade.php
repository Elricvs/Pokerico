<x-guest-layout>
    <h1 class="font-bold text-xl mb-4 capitalize">N°{{ $pokemon->id }} {{ $pokemon->name }}</h1>

    <div class="flex items-center justify-center">
        <img src="{{ asset($pokemon->imgurl) }}" alt="{{ $pokemon->name }}"
            class="rounded shadow aspect-auto object-cover object-center" />
    </div>

    <p class="mt-4">{{ $pokemon->description }}</p>

    <div class="mt-4 flex justify-between">
        <div style="width: 48%;">
            <p>
                Points de vie: {{ $pokemon->hp }}<br>
                Attaque: {{ $pokemon->att }}<br>
                Défense: {{ $pokemon->def }}<br>
                Taille: {{ $pokemon->size }} m
            </p>
        </div>
        <div style="width: 48%;">
            <p>
                Attaque spéciale: {{ $pokemon->attspe }}<br>
                Défense spéciale: {{ $pokemon->defspe }}<br>
                Vitesse: {{ $pokemon->vit }}<br>
                Poids: {{ $pokemon->weight }} kg
            </p>
        </div>
    </div>

    <div class="mt-8 flex items-center justify-center">
        <a href="{{ route('front.pokemon.index') }}"
            class="font-bold bg-white text-gray-700 px-4 py-2 rounded shadow hover:bg-gray-200 transition">
            Retour au Pokerico
        </a>
    </div>
</x-guest-layout>
