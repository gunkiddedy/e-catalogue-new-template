@extends('layouts.app')

@section('content')

    <div class="px-16 bg-gray-100">

        {{-- HEADER --}}
        <header-company></header-company>
        
        {{-- CONTENT--}}
        <company-list></company-list>

    </div>

    <footer-page></footer-page>
    
@endsection