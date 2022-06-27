@extends('app')

@section('content')

    {{-- @dd($data) --}}

    @livewire('test-component', ['x'=> $data])
@endsection