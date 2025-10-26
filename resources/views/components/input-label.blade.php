@props(['value'])

<label {{ $attributes->merge(['class' => 'block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6']) }}>
    {{ $value ?? $slot }}
</label>
