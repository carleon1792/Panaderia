<div class="main-contact">
    <h1 class="head">INSCRIPCIÓN</h1>
    <h3>Datos personales</h3>
    <div class="row">
        {!!Form::open(['route'=>'student.store', 'method'=>'POST'])!!}
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
                        {{Form::label('id', 'Email:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('email')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Telefono:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('telefono')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'mensaje:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::textarea('mensaje')}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {!!Form::submit('Guardar',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}
        </form>
    </div>
</div>
