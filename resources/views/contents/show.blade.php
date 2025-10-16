<x-app-layout>
    <x-slot name="content">
        <h2>Content details</h2>
        <p> Name: {{$content->name}}</p>
        <p> {{$content->image_url}}</p>
        <p> Description: {{$content->description}}</p>
        <p>Seen on: {{$content->date}}</p>
    </x-slot>
</x-app-layout>
