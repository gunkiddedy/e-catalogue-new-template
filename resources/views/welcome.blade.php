@extends('layouts.app')

@section('content')

    {{-- CONTAINER --}}
    <div class="px-16 bg-gray-100">
        {{-- HEADER COMPANY --}}
        <header-company></header-company>
        
        {{-- CONTENT--}}
        <welcome-page></welcome-page>
    </div>
    {{-- FOOTER --}}
    <footer-page></footer-page>
    
@endsection
