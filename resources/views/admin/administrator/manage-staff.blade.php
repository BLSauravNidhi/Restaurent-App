@extends('layouts.admin-layout')

@section('page-title')
    {{ 'Manage Staff' }}
@endsection

@section('page-content')
    @if (session('DeleteStatus'))
        <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-md font-medium inter w-fit mx-auto">Success: {{session('DeleteStatus')}}</span>  
    @endif

    <div class="w-full flex justify-end items-center flex-nowrap py-1 gap-2">
        <span class=" flex flex-nowrap gap-3 items-center mr-auto lexend font-bold text-3xl text-white bg-blue-500 text-shadow-sm pr-3 rounded-br-3xl rounded-tr-3xl shadow-lg">
            <svg height="44px" viewBox="0 -960 960 960" width="44px" class=" fill-white bg-blue-500 px-1 border-r-4 border-white"><path d="M240-440h360v-80H240v80Zm0-120h360v-80H240v80Zm-80 400q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z"/></svg>
            List
        </span>
        
        @if ($errors->any())
            <span class="px-3 py-1 bg-amber-100 text-amber-800 rounded-md font-medium inter">Error: {{$errors->first()}}</span>
        @endif
        @if (session('IdGenrationStatus'))
          <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-md font-medium inter">Success: {{session('IdGenrationStatus')}}</span>  
        @endif
        <button id="openAddWorkerModalBtn" class=" bg-emerald-600 text-white lexend py-2 px-5 rounded-md shadow-xl"> Add + </button>
    </div>
    <table class=" shadow-sm text-black" id="staffTable">
            <tbody class=" text-center p-5 inter text-sm">
                <tr class=" bg-blue-500 text-white inter">
                    <th>Sl No.</th>
                    <th>Staff Name</th>
                    <th>email</th>
                    <th>Job</th>
                    <th>Actions</th>
                </tr>
                @foreach ($workers as $worker)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$worker->admin_name}}</td>
                        <td>{{$worker->email}}</td>
                        <td><span class=" 
                            {{ ($worker->role=='waiter' )? 'text-emerald-600 bg-green-100' : '' }}
                            {{ ($worker->role=='kitchen' )? 'text-yellow-600 bg-yellow-100' : '' }}
                             
                            rounded-xl px-3 py-0.5 font-medium capitalize shadow">{{$worker->role}}</span></td>
                        <td class=" flex flex-row flex-nowrap gap-2 justify-center items-center">
                            <form action="" method="get" class=" w-fit">
                                @csrf
                                <button type="submit" class=" py-2 px-5 bg-emerald-600 shadow-md text-white rounded-md lexend">Edit</button>
                            </form>
                            
                            <form action="{{ route('manage-worker.destroy', $worker->id) }}" method="post" class=" w-fit">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" py-2 px-5 bg-red-600 shadow-md text-white rounded-md lexend">Delete</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('admin.administrator.modals.create-staff')
@endsection