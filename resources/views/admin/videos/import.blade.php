<div>

    @section('title','Importar Vídeos')



    <div class='row'>
        <div class='col-md-12'>

            <div class='table-responsive'>
                <table class='table table-bordered table-striped table-sm'>
                    @foreach($imports as $import)
                    <tr>
                        <td>{{ $import }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>

    <div class='row'>
        <div class='col-md-12'>

            <button wire:click="import()" wire:loading.attr="disabled">
                Importar
            </button>

            <div wire:loading wire:target="import">
                Importando...
            </div>

        </div>
    </div>

</div>