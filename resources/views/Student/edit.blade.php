<div class="main-contact">
    <h1 class="head">EDICIÓN DE DATOS</h1>
    <h3>Datos personales</h3>
    <div class="row">
        {!!Form::open(['route'=>['student.update',$student->identificacion], 'method'=>'PUT'])!!}
        <form>
            <div class="col-md-12 ">

                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Nombre:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('nombre',$student->nombre)}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Email:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('email',$student->email)}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Telefono:',$student->phone)}}
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
                        {{Form::textarea('mensaje',$student->message)}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {!!Form::submit('Editar',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}
            {!!Form::open(['route'=>['student.destroy',$student->identificacion], 'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
        </form>
    </div>
</div>
