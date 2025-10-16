<x-app-layout>
    <x-slot name="create">
        <!-- verander show naar de pg waar hij t moet laten zien na create -->

        <form action="{{ route('contents.show') }}" method="post">
            @csrf



            <label for="name">Name</label>
            <input type="text" name="name" id="name">



            <input type="submit" name="submit" value="Create">
        </form>
    </x-slot>
</x-app-layout>
