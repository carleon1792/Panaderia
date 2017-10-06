<div class="main-contact">
    <h1 class="head">Editar GENEROS</h1>
    <div class="row">
        {!!Form::open(['route'=>['generes.update',$genero->id], 'method'=>'PUT'])!!}
        <form>
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Nombre:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('nombre',$genero->genre)}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {!!Form::submit('Editar',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}
            {!!Form::open(['route'=>['generes.destroy',$genero->id], 'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
        </form>
    </div>
</div>
