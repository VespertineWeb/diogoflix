@extends('admin.index_admin')
@section('title', 'Videos')

@section('actions')
<a href='<?php echo url('admin/videos/import') ?>' class='btn btn-primary'>
    Importar
</a>


<a href='<?php echo url('admin/videos/create') ?>' class='btn btn-primary'>
    Cadastrar
</a>
@endsection

@section('content')

<div class='card'>
    <div class='card-body'>

        <div class='row'>
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
        <hr>

        <table class='table table-bordered table-hover'>
            <thead>
                <tr>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Position</th>
                    <th>Published_at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($videos as $key => $dado) {
                ?>
                    <tr>
                        <td> <img src="{{ $dado->thumbnail }}" alt="" style="width: 80px;"> </td>
                        <td><?php echo $dado->title; ?></td>
                        <td><?php echo $dado->status; ?></td>
                        <td><?php echo $dado->position; ?></td>
                        <td><?php echo $dado->published_at; ?></td>
                        <td>
                            <!-- <a href='<?php echo url('admin/videos/' . $dado->id . '/edit') ?>' class='btn btn-primary btn-xs'>
                                <span class='fa fa-edit'></span>
                            </a>
                            <a href='<?php echo url('admin/videos/' . $dado->id) ?>' class='btn btn-danger btn-xs'>
                                <span class='fa fa-trash'></span>
                            </a> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        {{ $videos->appends($filters)->links() }}
    </div>
</div>

@endsection