@extends('layouts.app')

@section('content')

    {{-- CONTAINER --}}
    <div class="px-16 bg-gray-100">
        {{-- HEADER COMPANY --}}
        <header-company></header-company>
        {{-- COMPANY CONTENT--}}
        <company-page></company-page>
    </div>
    {{-- FOOTER --}}
    <footer-page></footer-page>
    
@endsection
