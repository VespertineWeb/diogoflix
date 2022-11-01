@extends('admin.index_admin')
@section('title', 'playlists')

@section('actions')
   <a href='<?php echo url('/admin/playlists'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>



        <div class='form-row'>
            <div class='col-md-4'>
   <label >Etag</label>
   <input type='text' readonly value='{{ $playlists->etag }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Id_youtube</label>
   <input type='text' readonly value='{{ $playlists->id_youtube }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Published_at</label>
   <input type='text' readonly value='{{ $playlists->published_at }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Title</label>
   <input type='text' readonly value='{{ $playlists->title }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Description</label>
   <input type='text' readonly value='{{ $playlists->description }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnail</label>
   <input type='text' readonly value='{{ $playlists->thumbnail }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnails</label>
   <input type='text' readonly value='{{ $playlists->thumbnails }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Status</label>
   <input type='text' readonly value='{{ $playlists->status }}' class='form-control'>
</div>

        </div>
        <div class='form-row'>
            <div class='col-md-2'>
                <label >Excluir?</label>
                <button type='submit' class='btn btn-primary form-control'>
                    Excluir
                </button>
            </div>
        </div>
        
               </div>
    </div>
</div>
</div>
</div>
@endsection
        