@extends('layouts.app-layout')

@section('page-title')
    {{ "Verify-Table"}}
@endsection

@section('app-content')
    <div class="w-full flex justify-center items-center">
        <form action="{{ route('verifyTable')}}" method="post" class=" w-fit mt-25 flex flex-col gap-3 border px-8 py-15 border-gray-400 rounded-sm">
            @csrf
            <input type="text" name="passcode" placeholder="Code" class="  px-3 py-2 outline outline-gray-400">
            <input type="text" name="table-num" value="{{ $tableNum}}" hidden>

            <p class=" text-sm text-gray-500">Please Enter the table's <br> secure code to join.</p>
            <button type="submit" class=" w-fit font-medium bg-emerald-700 rounded-md px-2.5 py-1 shadow-md text-white">Verify</button>
        </form>
    </div>
@endsection