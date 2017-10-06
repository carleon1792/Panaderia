<div class="main-contact">
    <h1 class="head">CREAR GENEROS</h1>
    <div class="row">
        {!!Form::open(['route'=>'generes.store', 'method'=>'POST'])!!}
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
            </div>
            <div class="clearfix"></div>
            {!!Form::submit('Guardar',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}
        </form>
    </div>
</div>
