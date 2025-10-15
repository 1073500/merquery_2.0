<x-app-layout>
    <x-slot name="content">
        <h2>Content details</h2>
        <p> Name: {{$content->name}}</p>
        <p> {{$content->image_url}}</p>
        <p> Description: {{$content->description}}</p>
        <p>Date: {{$content->date}}</p>
    </x-slot>
</x-app-layout>
