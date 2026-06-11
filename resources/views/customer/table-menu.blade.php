@extends('layouts.menu-layout')

@section('page-title')
    {{ "Menu"}}
@endsection

@section('app-content')
    {{-- categories starting --}}
    <div class="w-full px-4 overflow-hidden">
        <h3 class=" font-medium lexend text-xl">Delicios foods here</h3>
        <div class=" flex flex-row flex-nowrap items-center overflow-x-scroll gap-3 py-6">
            {{-- Top food list start --}}
            @foreach ($viewData['categories'] as $category)
                <a href="" class=" w-26 h-26 bg-gray-200 text-center flex flex-col justify-center items-center shrink-0 gap-2 rounded-2xl">
                    <img src="{{ $category->image}}" class="w-10 h-10 rounded-4xl mix-blend-multiply brightness-120 bg-gray-200">
                    <p class="font-medium text-black lexend">{{ $category->name }}</p>
                </a>
            @endforeach
            </div>
            {{-- Top food list end --}}
        </div>
    </div>
    {{-- categories ending --}}
    {{-- page start --}}
    <section class="px-3 pb-8">
        <img src="https://img.magnific.com/free-psd/delicious-burger-food-menu-web-banner-template_106176-1436.jpg?semt=ais_hybrid&w=740&q=80" class="w-full max-h-50 rounded-4xl bg-lime-600 aspect-video object-cover object-center"></img>
    </section>
    {{-- page end  --}}
    
    {{-- Search Bar  --}}
    @include('components.food-search-bar')

    <section class="px-3 pb-8 flex flex-col gap-6">
        {{-- Filter items start --}}
        <div class="w-full overflow-x-scroll overflow-y-hidden flex flex-nowrap items-center gap-2">
            <p class="px-2 py-0 5 bg-lime-600 text-white rounded-sm font-medium shadow-2xs whitespace-nowrap">Filter</p>
            <p class="px-2 py-0 5 bg-gray-300 text-gray-800 rounded-sm font-medium shadow-2xs whitespace-nowrap">All Categories</p>
        </div>
        {{-- Filter items end --}}

        <div class="w-full flex gap-3 flex-wrap justify-center">
            
            {{-- Items Start  --}}
            @foreach ($viewData['menuItems'] as $item)
                <livewire:menu-item :item="$item" :key="$item->id" :sessionInfo="$sessionInfo" />
            @endforeach
            {{-- Items End  --}}
        </div>
    </section>
@endsection