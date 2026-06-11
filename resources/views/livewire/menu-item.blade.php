<div>
    <div class="w-90 h-38 shrink-0 rounded-2xl bg-gray-200 overflow-hidden relative grid grid-cols-[35%_auto_25%]">
        <span class=" absolute top-0 left-0 bg-black text-white rounded-br-2xl px-2 py-1.5 text-xs font-medium rubik">34% off</span>
        <div class="flex justify-end items-center">
            <img src="{{ $item->image}}" alt="" class=" scale-75 w-38 mix-blend-multiply aspect-square">
        </div>
        <div class="details py-3 flex flex-col gap-0.5">
            <h2 class="text-black font-bold inter capitalize">{{ $item->item_name}}</h2>
            <p class="text-sm text-gray-600">Offer vailid today only</p>
            <span class=" w-fit bg-orange-600 px-2 py-0.5 rounded-md font-medium text-sm text-white rubik">Offer</span>
            <p class=" font-bold ">₹{{ $item->price}}</p>
        </div>
        <div class=" flex flex-col items-end justify-between p-3">
            <svg viewBox="0 0 24 24" class=" w-7 h-7 bg-white fill-gray-500 rounded-3xl p-1">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"/>
            </svg>
            {{-- Actions  --}}
            @if ($quantity===0)
                <span class=" w-fit h-fit flex flex-nowrap justify-center items-center text-cente fill-black rounded-2xl font-bold overflow-hidden">
                    <button wire:click="addToCart">
                        <svg height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                            <path d="M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z"/>
                        </svg>
                    </button>
                </span>
            @else
                <span class=" w-fit h-fit flex flex-nowrap justify-center items-center text-cente fill-black rounded-2xl font-bold overflow-hidden gap-3">
                    <button wire:click="decreament" class=" flex items-center justify-center px-2.5 py-1 bg-lime-400 rounded-4xl text-white">&minus;</button>
                    <p>{{ $quantity }}</p>
                    <button wire:click="increament" class=" flex items-center justify-center px-2.5 py-1 bg-lime-400 rounded-4xl text-white">&plus;</button>
                </span>
            @endif
        </div>
    </div>
</div>
