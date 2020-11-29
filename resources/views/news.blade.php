<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News')}}
        </h2>
    </x-slot>

    @livewire('create-post')
    <section class="text-gray-700 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-12">
                @foreach(\App\Models\Post::all()->sortByDesc('created_at') as $post)
                    @livewire('post', ['post' => $post])
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
