<x-app-layout>
    <x-slot name="create">
        <x-slot name="heading">
            <div class="">
                <h1>Edit a post</h1>
            </div>
        </x-slot>
        <form class="m-4" method="POST" action="{{ route('contents.update', $content->id) }}">
            @csrf
            @method('PATCH');

            <div class="space-y-12">
                <div class="border-b border-white/10 pb-12">
                    <h2 class="text-base/7 text-white"><strong>Edit: </strong>{{ $content->title }}</h2>
                    <h1 class="text-base/7 text-gray-400"><strong>Created
                            at:</strong> {{ $content->created_at->format('d-m-Y H:i') }}</h1>
                    <p class="mt-1 text-sm/6 text-gray-400">Be careful with the images and information you share, as it
                        will be visible to all users.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                    <input id="title"
                                           type="text"
                                           name="title"
                                           placeholder="Blue Star"
                                           value="{{ $content->title }}"
                                           class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"/>
                                </div>
                                <x-input-error :messages="$errors->get('title')"/>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="name" class="block text-sm/6 font-medium text-white">Name</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                    <input
                                        id="name"
                                        type="text"
                                        name="name"
                                        placeholder="Rigel"
                                        value="{{ $content->name }}"
                                        class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"/>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('name')"/>
                        </div>
                    </div>
                </div>

                <div class="border-b border-white/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="type" class="block text-sm/6 font-medium text-white">Type</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="type"
                                        name="type"

                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                                    <option value="{{ $content->type }}">{{ $content->type }}</option>
                                    <option value="Asteroid">Asteriod</option>
                                    <option value="Comet">Comet</option>
                                    <option value="Dwarf-Planet">Dwarf Planet</option>
                                    <option value="Exoplanet">Exoplanet</option>
                                    <option value="Galaxy">Galaxy</option>
                                    <option value="Nebula">Nebula</option>
                                    <option value="Planet">Planet</option>
                                    <option value="Star">Star</option>
                                    <option value="Star-Cluster">Star Cluster</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                     class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">

                                    <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25
                                    3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('type')"/>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="constellation"
                                   class="block text-sm/6 font-medium text-white">Constellation</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="constellation"
                                        name="constellation"
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                                    <option value="{{ $content->constellation }}">{{ $content->constellation }}</option>
                                    <option value="Andromeda">Andromeda</option>
                                    <option value="Antilla">Antila</option>
                                    <option value="Apus">Apus</option>
                                    <option value="Aquarius">Aquarius</option>
                                    <option value="Aquila">Aquila</option>
                                    <option value="Ara">Ara</option>
                                    <option value="Aries">Aries</option>
                                    <option value="Auriga">Auriga</option>
                                    <option value="Bootes">Bootes</option>
                                    <option value="Caelum">Caelum</option>
                                    <option value="Camelopardalis">Camelopardalis</option>
                                    <option value="Cancer">Cancer</option>
                                    <option value="Canes Venatici">Canes Venatici</option>
                                    <option value="Canis Major">Canis Major</option>
                                    <option value="Canis Minor">Canis Minor</option>
                                    <option value="Capricornus">Capricornus</option>
                                    <option value="Carina">Carina</option>
                                    <option value="Cassiopeia">Cassiopeia</option>
                                    <option value="Centaurus">Centaurus</option>
                                    <option value="Cepheus">Cepheus</option>
                                    <option value="Cetus">Cetus</option>
                                    <option value="Chamaeleon">Chamaeleon</option>
                                    <option value="Circinus">Circinus</option>
                                    <option value="Columba">Columba</option>
                                    <option value="Coma Berenices">Coma Berenices</option>
                                    <option value="Corona Australis">Corona Australis</option>
                                    <option value="Corona Borealis">Corona Borealis</option>
                                    <option value="Corvus">Corvus</option>
                                    <option value="Crater">Crater</option>
                                    <option value="Crux">Crux</option>
                                    <option value="Cygnus">Cygnus</option>
                                    <option value="Delphinus">Delphinus</option>
                                    <option value="Dorado">Dorado</option>
                                    <option value="Draco">Draco</option>
                                    <option value="Equuleus">Equuleus</option>
                                    <option value="Eridanus">Eridanus</option>
                                    <option value="Fornax">Fornax</option>
                                    <option value="Gemini">Gemini</option>
                                    <option value="Grus">Grus</option>
                                    <option value="Hercules">Hercules</option>
                                    <option value="Horologium">Horologium</option>
                                    <option value="Hydra">Hydra</option>
                                    <option value="Hydrus">Hydrus</option>
                                    <option value="Indus">Indus</option>
                                    <option value="Lacerta">Lacerta</option>
                                    <option value="Leo">Leo</option>
                                    <option value="Leo Minor">Leo Minor</option>
                                    <option value="Lepus">Lepus</option>
                                    <option value="Libra">Libra</option>
                                    <option value="Lupus">Lupus</option>
                                    <option value="Lynx">Lynx</option>
                                    <option value="Lyra">Lyra</option>
                                    <option value="Mensa">Mensa</option>
                                    <option value="Microscopium">Microscopium</option>
                                    <option value="Monoceros">Monoceros</option>
                                    <option value="Musca">Musca</option>
                                    <option value="Norma">Norma</option>
                                    <option value="Octans">Octans</option>
                                    <option value="Ophiuchus">Ophiuchus</option>
                                    <option value="Orion">Orion</option>
                                    <option value="Pavo">Pavo</option>
                                    <option value="Pegasus">Pegasus</option>
                                    <option value="Perseus">Perseus</option>
                                    <option value="Phoenix">Phoenix</option>
                                    <option value="Pictor">Pictor</option>
                                    <option value="Pisces">Pisces</option>
                                    <option value="Piscis Austrinus">Piscis Austrinus</option>
                                    <option value="Puppis">Puppis</option>
                                    <option value="Pyxis">Pyxis</option>
                                    <option value="Reticulum">Reticulum</option>
                                    <option value="Sagitta">Sagitta</option>
                                    <option value="Sagittarius">Sagittarius</option>
                                    <option value="Scorpius">Scorpius</option>
                                    <option value="Sculptor">Sculptor</option>
                                    <option value="Scutum">Scutum</option>
                                    <option value="Serpens">Serpens</option>
                                    <option value="Sextans">Sextans</option>
                                    <option value="Taurus">Taurus</option>
                                    <option value="Telescopium">Telescopium</option>
                                    <option value="Triangulum">Triangulum</option>
                                    <option value="Triangulum Australe">Triangulum Australe</option>
                                    <option value="Tucana">Tucana</option>
                                    <option value="Ursa Major">Ursa Major</option>
                                    <option value="Ursa Minor">Ursa Minor</option>
                                    <option value="Vela">Vela</option>
                                    <option value="Virgo">Virgo</option>
                                    <option value="Volans">Volans</option>
                                    <option value="Vulpecula">Vulpecula</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                     class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                    <path
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('constellation')"/>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm/6 font-medium text-white">Country</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="country"
                                        name="country"
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                                    <option value="{{ $content->country }}">{{ $content->country }}</option>
                                    <option value="The-Netherlands">The Netherlands</option>
                                    <option value="Belgium">Belgium</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                     class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                    <path
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('country')"/>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="province" class="block text-sm/6 font-medium text-white">Province</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="province"
                                        name="province"
                                        autocomplete="province"
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                                    <option value="{{ $content->province }}">{{ $content->province }}</option>
                                    <option value="Gelderland">Gelderland</option>
                                    <option value="Limburg">Limburg</option>
                                    --}}
                                    <option value="Noord-Brabant">Noord-Brabant</option>
                                    --}}
                                    <option value="Noord-Holland">Noord-Holland</option>
                                    --}}
                                    <option value="Overijssel">Overijssel</option>
                                    --}}
                                    <option value="Utrecht">Utrecht</option>
                                    --}}
                                    <option value="Zeeland">Zeeland</option>
                                    --}}
                                    <option value="Zuid-Holland">Zuid-Holland</option>
                                    --}}
                                    <option value="Drenthe">Drenthe</option>
                                    --}}
                                    <option value="Friesland">Friesland</option>
                                    --}}
                                    <option value="Groningen">Groningen</option>
                                    --}}
                                    <option value="Flevoland">Flevoland</option>
                                    --}}
                                    <option value="Antwerpwn">Antwerpen</option>
                                    <option value="Henegouwen/Hainaut">Henegouwen/Hainaut</option>
                                    <option value="Luik/Liège/Lüttich<">Luik/Liège/Lüttich</option>
                                    <option value="Limburg (BE)">Limburg (BE)</option>
                                    <option value="Luxemburg/Luxembourg (BE)">Luxemburg/Luxembourg (BE)</option>
                                    <option value="Namen/Namur">Namen/Namur</option>
                                    <option value="Oost-Vlaanderen/Flandre-Orientale">
                                        Oost-Vlaanderen/Flandre-Orientale
                                    </option>
                                    <option value="Vlaams-Brabant">Vlaams-Brabant</option>
                                    <option value="West-Vlaanderen/Flandre-Occidentale">
                                        West-Vlaanderen/Flandre-Occidentale
                                    </option>
                                    <option value="Waals-Brabant/Brabant-Wallon">Waals-Brabant/Brabant-Wallon</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                     class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                    <path
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('province')"/>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="city"
                                   class="block text-sm/6 font-medium text-white">City</label>
                            <div class="mt-2">
                                <input id="city"
                                       type="text"
                                       name="city"
                                       placeholder="Capelle aan den IJssel"
                                       value="{{ $content->city }}"
                                       class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"/>
                            </div>
                            <x-input-error :messages="$errors->get('city')"/>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="town"
                                   class="block text-sm/6 font-medium text-white">Town</label>
                            <div class="mt-2">
                                <input id="town"
                                       type="text"
                                       name="town"
                                       placeholder="s'Gravenland"
                                       value="{{ $content->town }}"
                                       class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"/>
                            </div>
                            <x-input-error :messages="$errors->get('town')"/>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="date" class="block text-sm/6 font-medium text-white">Date</label>
                            <div class="mt-2">
                                <input id="date"
                                       type="date"
                                       name="date"
                                       placeholder=""
                                       value="{{ $content->date }}"
                                       class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"/>
                            </div>
                            <x-input-error :messages="$errors->get('date')"/>
                        </div>


                        <div class="col-span-full mb-4">
                            <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                            <div class="mt-2">
                                <textarea id="description"
                                          name="description"
                                          rows="3"
{{--                                          value="{{ $content->description }}"--}}
                                          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-400">Add extra information about your post.</p>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="picture" class="block text-sm/6 font-medium text-white">Image</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
                            <div class="text-center">
                                <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true"
                                     class="mx-auto size-12 text-gray-600">
                                    <path
                                        d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                        clip-rule="evenodd" fill-rule="evenodd"/>
                                </svg>
                                {{--                                <div class="mt-4 flex text-sm/6 text-gray-400">--}}
                                {{--                                    <label for="image_url"--}}
                                {{--                                           class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-400 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-500 hover:text-indigo-300">--}}
                                {{--                                        <span>Upload a file</span>--}}
                                {{--                                        <input id="image_url" type="text" name="image_url" class="sr-only"/>--}}
                                {{--                                    </label>--}}
                                {{--                                    <p class="pl-1">or drag and drop</p>--}}
                                {{--                                </div>--}}
                                <p class="text-xs/5 text-gray-400">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/contents/{{ $content->id }}" class="text-sm/6  font-semibold text-white">Cancel</a>
                        <button type="submit"
                                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </x-slot>
</x-app-layout>
