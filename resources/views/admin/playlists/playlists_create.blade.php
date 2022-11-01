@extends('admin.index_admin')
@section('title', 'Playlists')

@section('actions')
   <a href='<?php echo url('/admin/playlists'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


<div class='row'>
    <div class='col-md-12'>
        <div class='form-horizontal'>
            @include('commons/alerts')
            <form action='{{ route('playlists.store') }}' method='post'>
                @csrf
                @include('admin.playlists._partials.playlists_form')
            </form>
        </div>
    </div>
</div>
@endsection

