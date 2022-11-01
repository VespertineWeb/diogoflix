@extends('admin.index_admin')
@section('title', 'Videos')

@section('actions')
   <a href='<?php echo url('/admin/videos'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


<div class='row'>
    <div class='col-md-12'>
        <div class='form-horizontal'>
            @include('commons/alerts')
            <form action='{{ route('videos.store') }}' method='post'>
                @csrf
                @include('admin.videos._partials.videos_form')
            </form>
        </div>
    </div>
</div>
@endsection

