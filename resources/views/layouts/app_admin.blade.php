@extends('admin.index_admin')

@section('content')

@livewireStyles
@livewireScripts
{{ $slot }}
@endsection