<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Pokédex</h1>

        <form action="{{ route('front.pokemon.index') }}" method="GET" class="mb-8">
            <div class="flex justify-center space-x-4">
                <input
                    type="text"
                    name="search"
                    id="search"
                    placeholder="Rechercher un Pokémon"
                    class="border border-red-500 rounded shadow px-4 py-2 w-2/8"
                    value="{{ request()->search }}"
                    autofocus
                />
                <select
                    name="type"
                    id="type"
                    class="border border-red-500 rounded shadow px-4 py-2 w-2/8"
                >
                    <option value="">Tous les types</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ request()->type == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
                <button
                    type="submit"
                    class="bg-red-500 text-white rounded shadow px-4 py-2 hover:bg-red-500 transition"
                >
                    Rechercher
                </button>
            </div>
        </form>

        <ul class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($pokemon as $poke)
                <li class="bg-white rounded-lg shadow-lg p-4 transform transition duration-300 hover:shadow-xl hover:scale-105">
                    <a href="{{ route('front.pokemon.show', $poke) }}" class="block text-center">
                        <h2 id="Name" class="text-xl font-bold mb-2">{{ $poke->name }}</h2>
                        <img class="mx-auto mb-4" src="{{ asset($poke->imgurl) }}" alt="{{ $poke->name }}" />
                        <div class="flex justify-center space-x-2">
                            <img class="h-8" src="{{ asset($poke->type1->imgurl) }}" alt="{{ $poke->type1->name }}" />
                            @if($poke->type2 !== null)
                                <img class="h-8" src="{{ asset($poke->type2->imgurl) }}" alt="{{ $poke->type2->name }}" />
                            @endif
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-guest-layout>
