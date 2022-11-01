

        <div class='form-row'>
            <div class='col-md-4'>
   <label >Etag</label>
   <input type='text' name='etag' value='{{ $videos->etag ?? old("etag")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Id_youtube</label>
   <input type='text' name='id_youtube' value='{{ $videos->id_youtube ?? old("id_youtube")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Published_at</label>
   <input type='text' name='published_at' value='{{ $videos->published_at ?? old("published_at")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Title</label>
   <input type='text' name='title' value='{{ $videos->title ?? old("title")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Description</label>
   <input type='text' name='description' value='{{ $videos->description ?? old("description")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnail</label>
   <input type='text' name='thumbnail' value='{{ $videos->thumbnail ?? old("thumbnail")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnails</label>
   <input type='text' name='thumbnails' value='{{ $videos->thumbnails ?? old("thumbnails")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Status</label>
   <input type='text' name='status' value='{{ $videos->status ?? old("status")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >PlaylistId</label>
   <input type='text' name='playlistId' value='{{ $videos->playlistId ?? old("playlistId")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Position</label>
   <input type='text' name='position' value='{{ $videos->position ?? old("position")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >VideoId</label>
   <input type='text' name='videoId' value='{{ $videos->videoId ?? old("videoId")  }}' class='form-control'>
</div>

        </div>
        <div class='form-row'>
            <div class='col-md-2'>
                <label >&nbsp;</label>
                <button type='submit' class='btn btn-primary form-control'>
                    Salvar
                </button>
            </div>
        </div>