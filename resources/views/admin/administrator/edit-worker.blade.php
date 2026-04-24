@extends('layouts.admin-layout')

@section('page-title')
    {{ "Edit" }}
@endsection

@section('page-content')
    <div class="w-full"><h1 class="text-3xl font-bold">Edit</h1></div>
    <div class="w-full">
        <form action="{{ route('manage-worker.update', $worker->id)}}" method="post" class=" flex flex-col gap-2">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $worker->admin_name }}" placeholder="Name" class=" px-5 py-2 focus:outline-0 border border-gray-200">
            <input type="text" name="email" value="{{ $worker->email }}" placeholder="Email" class=" px-5 py-2 focus:outline-0 border border-gray-200">
            <select name="job" class=" px-5 py-2 focus:outline-0 border border-gray-200 appearance-none">
                <option value="waiter" {{ $worker->role=='waiter' ? 'Selected' : '' }}>Waiter</option>
                <option value="kitchen" {{ $worker->role=='kitchen' ? 'Selected' : '' }}>Kitchen</option>
            </select>
            <input type="text" name="password" placeholder="New Password" class=" px-5 py-2 focus:outline-0 border border-gray-200">
            <input type="text" name="password_confirmation" placeholder="Confirm Password" class=" px-5 py-2 focus:outline-0 border border-gray-200">
            <button type="submit" class=" bg-blue-600 text-white lexend py-2 px-5 rounded-md shadow-xl">Update</button>
        </form>
    </div>
@endsection