@extends('layouts.app')

@section('content')

    <div class="px-16 bg-gray-100">

        {{-- HEADER COMPANY --}}
        <header-company></header-company>
        
        {{-- CONTENT--}}
        <welcome-page></welcome-page>

    </div>

    <footer-page></footer-page>
    
@endsection
