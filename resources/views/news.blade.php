<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News')}}
        </h2>
    </x-slot>

    @livewire('create-post')

    @foreach(\App\Models\Post::all()->sortByDesc('created_at') as $post)
        @livewire('post', ['post' => $post])
    @endforeach
</x-app-layout>
