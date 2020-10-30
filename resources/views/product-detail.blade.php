@extends('layouts.app')

@section('content')

    {{-- CONTAINER --}}
    <div class="px-16 bg-gray-100">
        {{-- HEADER COMPANY --}}
        <header-company></header-company>
        {{-- COMPANY CONTENT--}}
        <product-detail></product-detail>
    </div>
    {{-- FOOTER --}}
    <footer-page></footer-page>
    
@endsection