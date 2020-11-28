<div class="bg-white mx-auto mt-3 shadow-md rounded w-1/3 px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
            {{ __('Title') }}
        </label>
        <input wire:model.debounce.200ms="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text">
    </div>
    <div class="mb-6">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="description">
            {{ __('Description') }}
        </label>
        <textarea wire:model.debounce.200ms="description" class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"
                  id="description" type="description"></textarea>
    </div>
    <div class="flex items-center justify-between">
        <button wire:click="createPost" class="mx-auto bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded-lg" type="button">
            {{ __('Create') }}
        </button>
    </div>
</div>
