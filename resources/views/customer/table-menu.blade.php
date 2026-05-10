@extends('layouts.app-layout')

@section('page-title')
    {{ "Menu"}}
@endsection

@section('app-content')
     <span>
        Your Table's join Code : {{ $sessionInfo->session_join_code}}
     </span>
@endsection