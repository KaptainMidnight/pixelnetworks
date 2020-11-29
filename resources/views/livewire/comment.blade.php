<div>
    {{--    <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">--}}
    {{--        @csrf--}}
    {{--        <div class="flex flex-wrap -mx-3 mb-6">--}}
    {{--            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">{{ __('Add a new comment') }}</h2>--}}
    {{--            <div class="w-full md:w-full px-3 mb-2 mt-2">--}}
    {{--                <textarea--}}
    {{--                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"--}}
    {{--                    name="body" placeholder="{{ __('Type Your Comment') }}" required wire:model="comment"></textarea>--}}
    {{--            </div>--}}
    {{--            <div class="w-full md:w-full flex items-start md:w-full px-3">--}}
    {{--                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">--}}
    {{--                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">--}}
    {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
    {{--                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
    {{--                    </svg>--}}
    {{--                    <p class="text-xs md:text-sm pt-px">{{ __('Some HTML is okay') }}</p>--}}
    {{--                </div>--}}
    {{--                <div class="-mr-1">--}}
    {{--                    <input type='submit'--}}
    {{--                           class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100"--}}
    {{--                           value='Post Comment'--}}
    {{--                           wire:click="submit">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 mx-auto">
        <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600">{{ __('Comment') }}</label>
            <textarea wire:model="comment" id="message" name="message"
                      class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button
            wire:click="submit"
            class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            {{ __('Create Comment') }}
        </button>
    </div>

    @foreach($comments as $comment)
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
            <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                     src="https://dummyimage.com/80x80">
                <div class="flex-grow">
                    <h2 class="text-gray-900 title-font font-medium">{{ $comment->user->name }}</h2>
                    <p class="text-gray-500">{{ decrypt($comment->comment) }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

