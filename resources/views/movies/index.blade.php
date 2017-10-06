<div class="row">
  <table class="table" border="2">
      <thead>
        <td>Nombre </td>
        <td>Genero</td>
        <td>Lanzamiento </td>
        <td>Director </td>
        <td>Duracion </td>
        <td>Actualizar </td>
        <td>Eliminar </td>
      </thead>
      @foreach($movies as $movie)
      <tbody>
          <td>{{$movie->nombre}}</td>
          <td>{{$movie->genero}}</td>
          <td>{{$movie->cast}}</td>
          <td>{{$movie->direction}}</td>
          <td>{{$movie->duration}}</td>
          <td>{!! link_to_route('movies.edit',$title='Editar',$parameters=$movie->id,
          $attributes=['class'=>'btn btn-primary']) !!}</td>
          <td>
          {!!Form::open(['route'=>['movies.destroy',$movie->id], 'method'=>'DELETE'])!!}
          {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
          {!!Form::close()!!}
          </td>
      </tbody>
      @endforeach
  </table>

    {!! link_to_route('movies.create',$title='Crear nueva pelicula',null,
      $attributes=['class'=>'btn btn-primary']) !!}

</div>

