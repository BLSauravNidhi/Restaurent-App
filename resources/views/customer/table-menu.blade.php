@extends('layouts.app-layout')

@section('page-title')
    {{ "Menu"}}
@endsection

@section('app-content')
     {!! "Table = " . $tableNum . " <br> " . $token !!}
@endsection