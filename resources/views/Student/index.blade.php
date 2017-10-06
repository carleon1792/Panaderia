<div class="row">
  <table class="table" border="2">
      <thead>
        <td>Nombre </td>
        <td>Email </td>
        <td>Teléfono </td>
        <td>Comentario </td>
        <td>Actualizar </td>
        <td>Eliminar </td>
      </thead>
      @foreach($students as $student)
      <tbody>

          <td>{{$student->nombre}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->phone}}</td>
          <td>{{$student->message}}</td>


          <td>{!! link_to_route('student.edit',$title='Editar',$parameters=$student->identificacion,
          $attributes=['class'=>'btn btn-primary']) !!}</td>
          <td>
          {!!Form::open(['route'=>['student.destroy',$student->identificacion], 'method'=>'DELETE'])!!}
          {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
          {!!Form::close()!!}
          </td>

      </tbody>
      @endforeach


  </table>
</div>

