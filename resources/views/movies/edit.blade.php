<div class="main-contact">
    <h1 class="head">EDITAR PELICULA</h1>
    <div class="row">
        {!!Form::open(['route'=>['movies.update',$movie->id], 'method'=>'PUT'])!!}
        <form>
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Nombre:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('nombre')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Seleccionar el genero:')}}
                    </div>
                    <div class="col-md-6">
                        {!! Form::select('select_genero', $generos,''
                        ,array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Fecha de Lanzamiento:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('cast')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Director:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('direction')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Duración:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('duration')}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {!!Form::submit('Editar',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}

        </form>
    </div>
</div>

