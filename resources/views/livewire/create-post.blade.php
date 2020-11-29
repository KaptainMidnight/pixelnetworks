{{--<div class="bg-white w-1/3 mx-auto mt-3 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">--}}
{{--    <div class="mb-4">--}}
{{--        <label class="block text-grey-darker text-sm font-bold mb-2" for="username">--}}
{{--            {{ __('Title') }}--}}
{{--        </label>--}}
{{--        <input wire:model.debounce.200ms="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text">--}}
{{--    </div>--}}
{{--    <div class="mb-6">--}}
{{--        <label class="block text-grey-darker text-sm font-bold mb-2" for="description">--}}
{{--            {{ __('Description') }}--}}
{{--        </label>--}}
{{--        <textarea wire:model.debounce.200ms="description" class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"--}}
{{--                  id="description" type="description"></textarea>--}}
{{--    </div>--}}
{{--    <div class="flex items-center justify-between">--}}
{{--        <button wire:click="createPost" class="mx-auto bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg" type="button">--}}
{{--            {{ __('Create') }}--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<section class="text-gray-700 body-font relative">--}}
{{--    <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">--}}
{{--        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">{{ __('Create Post') }}</h2>--}}
{{--        <div class="relative mb-4">--}}
{{--            <label for="name" class="leading-7 text-sm text-gray-600">{{ __('Title') }}</label>--}}
{{--            <input type="text" id="name" name="name"--}}
{{--                   class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">--}}
{{--        </div>--}}
{{--        <div class="relative mb-4">--}}
{{--            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>--}}
{{--            <textarea id="message" name="message"--}}
{{--                      class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>--}}
{{--        </div>--}}
{{--        <button--}}
{{--            class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">--}}
{{--            {{ __('Create') }}--}}
{{--        </button>--}}
{{--    </div>--}}

{{--</section>--}}

<div class="container px-3 py-24 flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-3 md:mt-0 relative z-10">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">{{ __('Create Post') }}</h2>
        <p class="leading-relaxed mb-5 text-gray-600"></p>
        <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">{{ __('Title') }}</label>
            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600">{{ __('Description') }}</label>
            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <p class="text-xs text-gray-500 mt-3"></p>
    </div>
</div>
