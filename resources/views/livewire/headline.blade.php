<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Headline') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap px-6">
        <div class="w-full lg:w-1/2 md:px-4 lg:px-6 py-5">
            <div class="bg-white">
                <div>
                    <img src="https://images.pexels.com/photos/956999/milky-way-starry-sky-night-sky-star-956999.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""
                         class="h-56 w-full border-white border-8">
                </div>
                <div class="px-4 py-4 md:px-10">
                    <h1 class="font-bold text-lg">
                        {{ $post->title }}
                    </h1>
                    <p class="py-4">
                        {{ $post->description }}
                    </p>
                    <div class="flex flex-wrap pt-8">
                        <div class="w-full md:w-1/3 text-sm font-medium">
                            {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('comment', ['post_id' => $post->id])
</div>
