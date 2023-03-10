@extends('admin.index_admin')
@section('title', 'Playlists')

@section('actions')

<a href='<?php echo url('admin/videos/import') ?>' class='btn btn-primary'>
    Importar
</a>

<!-- <a href='<?php echo url('admin/playlists/create') ?>' class='btn btn-primary'>
    Cadastrar
</a> -->
@endsection

@section('content')

<div class='card'>
    <div class='card-body'>

        <!-- <div class='row'>
            <div class='col-md-12'>
                <form action="" method='get'>
                    @csrf
                    <div class='form-row'>
                        <div class='col-md-2'>
                            <label>etag</label>
                            <input type='text' name='etag' value="{{ $filters['etag'] ?? '' }}" class='form-control'>
                        </div>
                        <div class='col-md-2'>
                            <label>&nbsp;</label>
                            <input type='submit' value='Pesquisar' class='form-control btn btn-primary'>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr> -->

        <table class='table table-bordered table-hover'>
            <thead>
                <tr>
                    <th></th>
                    <th>Título</th>
                    <th>Categoria</th>
                    <th>Vídeos</th>
                    <th>Data do Vídeo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($playlists as $key => $dado) {
                ?>
                    <tr>
                        <td> <img src="{{ $dado->thumbnail }}" alt="" style="width: 80px;"> </td>
                        <td><?php echo $dado->title; ?></td>
                        <td>{{ $dado->category->name ?? '' }}</td>
                        <td><?php echo $dado->videos_youtube_id_count; ?></td>
                        <td><?php echo $dado->published_at; ?></td>
                        <td>
                            <a href='<?php echo url('admin/playlists/' . $dado->id . '/edit') ?>' class='btn btn-light btn-sm'>
                                <span class='bx bx-edit'></span>
                            </a>
                            <!-- <a href='<?php echo url('admin/playlists/' . $dado->id) ?>' class='btn btn-danger btn-xs'>
                                <span class='fa fa-trash'></span>
                            </a> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        {{ $playlists->appends($filters)->links() }}
    </div>
</div>

@endsection