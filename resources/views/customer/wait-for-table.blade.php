@extends('layouts.app-layout')

@section('page-title')
    {{ "Waiting for approval"}}
@endsection

@push('page-scripts')
    <script defer>
        // polling 
        setInterval(async () => {
            const res = await fetch(`{{ route('tableRequesStatusCheck', $reqId)}}`);
            const data = await res.json();
            
            if (data.status === 'approved') {
                window.location.href = `/menu/${data.table_number}/${data.session_token}`;
            }

            if (data.status === 'rejected') {
                alert("Request rejected");
                window.location.href = `{{ route('HomePage')}}`;
            }

        }, 10000); // every 10 sec
    </script>
@endpush

@section('app-content')
    <div class="w-screen h-[calc(100vh-60px)] bg-gray-900 flex justify-center items-center">
        <h2 class="text-gray-800 font-bold text-3xl inter">Waiting for approval</h2>
    </div>
@endsection