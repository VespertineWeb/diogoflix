@extends('admin.index_admin')
@section('title', 'videos')

@section('actions')
   <a href='<?php echo url('/admin/videos'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>



        <div class='form-row'>
            <div class='col-md-4'>
   <label >Etag</label>
   <input type='text' readonly value='{{ $videos->etag }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Id_youtube</label>
   <input type='text' readonly value='{{ $videos->id_youtube }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Published_at</label>
   <input type='text' readonly value='{{ $videos->published_at }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Title</label>
   <input type='text' readonly value='{{ $videos->title }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Description</label>
   <input type='text' readonly value='{{ $videos->description }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnail</label>
   <input type='text' readonly value='{{ $videos->thumbnail }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnails</label>
   <input type='text' readonly value='{{ $videos->thumbnails }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Status</label>
   <input type='text' readonly value='{{ $videos->status }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >PlaylistId</label>
   <input type='text' readonly value='{{ $videos->playlistId }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Position</label>
   <input type='text' readonly value='{{ $videos->position }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >VideoId</label>
   <input type='text' readonly value='{{ $videos->videoId }}' class='form-control'>
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
        