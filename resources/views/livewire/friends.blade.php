<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Friends') }}
        </h2>
    </x-slot>

    <div class="w-full max-w-screen-xl mx-auto px-6">
        <div class="flex justify-center p-4 px-3 py-10">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                    <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                        {{ __('All users') }}
                    </div>
                    <div class="flex items-center bg-gray-200 rounded-md">
                        <div class="pl-2">
                            <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24">
                                <path class="heroicon-ui"
                                      d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                            </svg>
                        </div>
                        <input
                            class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2"
                            id="search" type="text" placeholder="Search teams or members">
                    </div>
                    <div class="py-3 text-sm overflow-auto h-64">
                        @foreach($friends as $friend)
                            <div
                                class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                                @if(rand(0, 1) == 1)
                                    <span class="bg-green-400 h-2 w-2 m-2 rounded-full"></span>
                                @endif
                                <div class="flex-grow font-medium px-2">{{ $friend->name }}</div>
                                <div wire:click="send({{ $friend->id }})"
                                     class="text-sm font-normal text-gray-500 tracking-wide">{{ __('Friend') }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full max-w-screen-xl mx-auto px-6">
        <div class="flex justify-center p-4 px-3 py-10">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                    <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                        {{ __('Friend list') }}
                    </div>
                    <div class="flex items-center bg-gray-200 rounded-md">
                        <div class="pl-2">
                            <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24">
                                <path class="heroicon-ui"
                                      d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                            </svg>
                        </div>
                        <input
                            class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2"
                            id="search" type="text" placeholder="Search teams or members">
                    </div>
                    <div class="py-3 text-sm overflow-auto h-64">
                        @foreach($friendsAccepted as $friend)
                            <div
                                class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                                @if(rand(0, 1) == 1)
                                    <span class="bg-green-400 h-2 w-2 m-2 rounded-full"></span>
                                @endif
                                <div class="flex-grow font-medium px-2">{{ $friend->name }}</div>
                                <div wire:click="send({{ $friend->id }})"
                                     class="text-sm font-normal text-green-400 tracking-wide">{{ __('Accepted!') }}</div>
                            </div>
                        @endforeach

                        @foreach($requests as $request)
                                <div
                                    class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                                    @if(rand(0, 1) == 1)
                                        <span class="bg-green-400 h-2 w-2 m-2 rounded-full"></span>
                                    @endif
                                    <div class="flex-grow font-medium px-2">{{ $request->name }}</div>
                                    <div wire:click="send({{ $request->id }})"
                                         class="text-sm font-normal text-blue-400 tracking-wide">{{ __('Pending!') }}</div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    @if(count($requests) > 0)--}}
{{--        @foreach($requests as $request)--}}
{{--            <div class="sm:w-1/4 p-2 mx-auto">--}}
{{--                <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">--}}
{{--                    <div class="mb-3">--}}
{{--                        <img--}}
{{--                            class="w-auto mx-auto rounded-full"--}}
{{--                            src="https://i.pravatar.cc/150?img=66"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                    <h2 class="text-xl font-medium text-gray-700">{{ $request->name ?? '' }}</h2>--}}
{{--                    <span class="text-blue-500 block mb-5">{{ __('Your new friend!') }}</span>--}}

{{--                    <a wire:click="accept({{ $request->id ?? '' }})" wire:click="$refresh" class="px-4 py-2 bg-blue-500 text-white rounded-full cursor-pointer">{{ __('Accept') }}</a>--}}
{{--                    <a wire:click="deny({{ $request->id ?? '' }})" class="px-4 py-2 bg-blue-500 text-white rounded-full cursor-pointer">{{ __('Deny') }}</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    @endif--}}
</div>
