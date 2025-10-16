<x-app-layout>
    <x-slot name="create">
        <!-- verander show naar de pg waar hij t moet laten zien na create -->

{{--        <form action="{{ route('contents.show') }}" method="post">--}}
        <form action="" method="post">
            @csrf

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="constellation">Constellation</label>
                <select name="constellation" id="">
                <option value="">Andromeda</option>
                <option value="">Antila</option>
                <option value="">Apus</option>
                <option value="">Aquarius</option>
                <option value="">Aquila</option>
                <option value="">Ara</option>
                <option value="">Aries</option>
                <option value="">Auriga</option>
                <option value="">Bootes</option>
                <option value="">Caelum</option>
                <option value="">Camelopardalis</option>
                <option value="">Cancer</option>
                <option value="">Canes Venatici</option>
                <option value="">Canis Major</option>
                <option value="">Canis Minor</option>
                <option value="">Capricornus</option>
                <option value="">Carina</option>
                <option value="">Cassiopeia</option>
                <option value="">Centaurus</option>
                <option value="">Cepheus</option>
                <option value="">Cetus</option>
                <option value="">Chamaeleon</option>
                <option value="">Circinus</option>
                <option value="">Columba</option>
                <option value="">Coma Berenices</option>
                <option value="">Corona Australis</option>
                <option value="">Corona Borealis</option>
                <option value="">Corvus</option>
                <option value="">Crater</option>
                <option value="">Crux</option>
                <option value="">Cygnus</option>
                <option value="">Delphinus</option>
                <option value="">Dorado</option>
                <option value="">Draco</option>
                <option value="">Equuleus</option>
                <option value="">Eridanus</option>
                <option value="">Fornax</option>
                <option value="">Gemini</option>
                <option value="">Grus</option>
                <option value="">Hercules</option>
                <option value="">Horologium</option>
                <option value="">Hydra</option>
                <option value="">Hydrus</option>
                <option value="">Indus</option>
                <option value="">Lacerta</option>
                <option value="">Leo</option>
                <option value="">Leo Minor</option>
                <option value="">Lepus</option>
                <option value="">Libra</option>
                <option value="">Lupus</option>
                <option value="">Lynx</option>
                <option value="">Lyra</option>
                <option value="">Mensa</option>
                <option value="">Microscopium</option>
                <option value="">Monoceros</option>
                <option value="">Musca</option>
                <option value="">Norma</option>
                <option value="">Octans</option>
                <option value="">Ophiuchus</option>
                <option value="">Orion</option>
                <option value="">Pavo</option>
                <option value="">Pegasus</option>
                <option value="">Perseus</option>
                <option value="">Phoenix</option>
                <option value="">Pictor</option>
                <option value="">Pisces</option>
                <option value="">Piscis Austrinus</option>
                <option value="">Puppis</option>
                <option value="">Pyxis</option>
                <option value="">Reticulum</option>
                <option value="">Sagitta</option>
                <option value="">Sagittarius</option>
                <option value="">Scorpius</option>
                <option value="">Sculptor</option>
                <option value="">Scutum</option>
                <option value="">Serpens</option>
                <option value="">Sextans</option>
                <option value="">Taurus</option>
                <option value="">Telescopium</option>
                <option value="">Triangulum</option>
                <option value="">Triangulum Australe</option>
                <option value="">Tucana</option>
                <option value="">Ursa Major</option>
                <option value="">Ursa Minor</option>
                <option value="">Vela</option>
                <option value="">Virgo</option>
                <option value="">Volans</option>
                <option value="">Vulpecula</option>

                </select>
            </div>

            <div>
                <label for="constellation">Constellation</label>
                <select name="constellation" id="">
                    <option value="">Andromeda</option>


                </select>
            </div>

            <div>
                <label for="description">Description</label>
                <!--OLD behoudt je waarde-->
                <input type="text" name="description" id="description" value="{{ old('description') }}"/>
            </div>

{{--            <select name="category_id" id="">--}}
{{--                @foreach($content as $item)--}}
{{--                    <option value="{{$item->id}}">{{$item->type}}</option>--}}
{{--                    <option value="{{$item->id}}">{{$item->country}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
            <div>
                <label for="country">Country</label>
                <select name="country" id="">
                    <option value="">The Netherlands</option>
                    <option value="">Belgium</option>
                </select>
            </div>

            <div>
                <input type="submit" name="submit" value="Create">
            </div>

        </form>
    </x-slot>
</x-app-layout>
