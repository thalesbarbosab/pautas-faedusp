@extends('adminlte::page')
@section('content')
    @yield('content')
@endsection
@section('js')
    @component('components.cms.message')@endcomponent
    @component('components.cms.sanatize')@endcomponent
    @component('components.cms.plugins')@endcomponent
    @component('components.cms.commom-js')@endcomponent
    @yield('custom-js')
@endsection
