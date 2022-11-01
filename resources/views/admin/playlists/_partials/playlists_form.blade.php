

        <div class='form-row'>
            <div class='col-md-4'>
   <label >Etag</label>
   <input type='text' name='etag' value='{{ $playlists->etag ?? old("etag")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Id_youtube</label>
   <input type='text' name='id_youtube' value='{{ $playlists->id_youtube ?? old("id_youtube")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Published_at</label>
   <input type='text' name='published_at' value='{{ $playlists->published_at ?? old("published_at")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Title</label>
   <input type='text' name='title' value='{{ $playlists->title ?? old("title")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Description</label>
   <input type='text' name='description' value='{{ $playlists->description ?? old("description")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnail</label>
   <input type='text' name='thumbnail' value='{{ $playlists->thumbnail ?? old("thumbnail")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Thumbnails</label>
   <input type='text' name='thumbnails' value='{{ $playlists->thumbnails ?? old("thumbnails")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Status</label>
   <input type='text' name='status' value='{{ $playlists->status ?? old("status")  }}' class='form-control'>
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