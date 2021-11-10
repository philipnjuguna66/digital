@extends('blog::layouts.app')
@section('title','Create a new post')
@push('page_css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('content')
    <livewire:list-blogs/>
@endsection
