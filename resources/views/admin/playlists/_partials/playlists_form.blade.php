<div class='form-row'>
   <div class='col-md-8'>
      <label>Titulo</label>
      <input type='text' disabled name='title' value='{{ $playlists->title ?? old("title")  }}' class='form-control'>
   </div>
</div>

<div class='form-row'>
   <div class='col-md-4'>
      <label>Categoria</label>
      <x-select name='category_id' :options='$categories' :selected='$playlists->category_id' :required='true' />
   </div>

   <div class='col-md-4'>
      <label>Status</label>
      <x-select name='status' :options='["active"=>"ativo","inactive"=>"Inativo"]' :selected='$playlists->status' :required='true' />
   </div>

</div>
<div class='form-row'>
   <div class='col-md-2'>
      <label>&nbsp;</label>
      <button type='submit' class='btn btn-primary form-control'>
         Salvar
      </button>
   </div>
</div>