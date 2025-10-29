<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- firstname -->
        <div>
            <x-input-label for="first_name" :value="__('Firstname')"/>
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('name')"
                          required autofocus autocomplete="first_name"/>
            <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
        </div>

        <!-- lastname -->
        <div>
            <x-input-label for="last_name" :value="__('Lastname')"/>
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                          :value="old('last_name')" required autofocus autocomplete="last_name"/>
            <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
        </div>

        <!-- username -->
        <div>
            <x-input-label for="username" :value="__('Username')"/>
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                          required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('username')" class="mt-2"/>
        </div>

        <!-- Province -->
        <div class="mt-4">
            {{--            <x-input-label for="email" :value="__('Email')" />--}}
            <label for="province" class="block text-sm/6 font-medium text-white">Province</label>
            <div class="mt-2 grid grid-cols-1">
                <select id="province" name="province" autocomplete="province" required
                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                    <option value="Gelderland">Gelderland</option>
                    <option value="Limburg">Limburg</option>
                    <option value="Noord-Brabant">Noord-Brabant</option>
                    <option value="Noord-Holland">Noord-Holland</option>
                    <option value="Overijssel">Overijssel</option>
                    <option value="Utrecht">Utrecht</option>
                    <option value="Zeeland">Zeeland</option>
                    <option value="Zuid-Holland">Zuid-Holland</option>
                    <option value="Drenthe">Drenthe</option>
                    <option value="Friesland">Friesland</option>
                    <option value="Groningen">Groningen</option>
                    <option value="Flevoland">Flevoland</option>
                    <option value="Antwerpen">Antwerpen</option>
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
                <x-input-error :messages="$errors->get('province')" class="mt-2"/>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"/>

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
