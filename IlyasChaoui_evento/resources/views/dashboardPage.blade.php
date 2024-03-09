@extends('Layouts.dashboardLayout')
@section('main')
    @if (Request::url() === 'http://127.0.0.1:8000/category')
        @section('title')
            Category
        @endsection
        <x-dashboard-pages.category-section :data="$data" />
    @elseif(Request::url() === 'http://127.0.0.1:8000/static')
        @section('title')
            Static
        @endsection
        <x-dashboard-pages.static-section :data="$data" />
    @else
        @section('title')
            Event
        @endsection
        <x-dashboard-pages.event-section :data="$data"  />
    @endif

@endsection
