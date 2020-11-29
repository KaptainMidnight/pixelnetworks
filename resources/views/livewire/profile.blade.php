<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Friends') }}
        </h2>
    </x-slot>
    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3 mx-auto">
        <img src="https://miro.medium.com/max/3800/1*CkLmBVwhdFESTKW4VVkJkA.jpeg" class="w-full"/>
        <div class="flex justify-center -mt-8">
            @if($user->id === 151)
                <img src="https://media2.giphy.com/media/13PMpiayBvKFck/giphy.gif?cid=ecf05e47ijo4v4n7odhz15t5vhbrqy0glmttfktimuoloy96&amp;rid=giphy.gifds" class="rounded-full border-solid border-white border-2 -mt-3">
            @else
                <img src="http://via.placeholder.com/150" class="rounded-full border-solid border-white border-2 -mt-3">
            @endif
        </div>
        <div class="text-center px-3 pb-6 pt-2">
            <h3 class="text-black text-sm font-bold font-sans">{{ $user->name }}</h3>
        </div>
        <div class="flex justify-center pb-3 text-grey-dark">
            <div class="text-center">
                <h2>{{ count($user->getFriends()) }}</h2>
                <span>Friends</span>
            </div>
        </div>
    </div>
</div>
