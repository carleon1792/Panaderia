<div class="row">
    <h1>GÉNEROS</h1>
  <table class="table" border="2">
      <thead>
        <td>Nombre </td>
        <td>Editar </td>
        <td>Eliminar </td>
      </thead>
      @foreach($generos as $genero)
      <tbody>
          <td>{{$genero->genre}}</td>
          <td>{!! link_to_route('generes.edit',$title='Editar',$parameters=$genero->id,
          $attributes=['class'=>'btn btn-primary']) !!}</td>
          <td>
          {!!Form::open(['route'=>['generes.destroy',$genero->id], 'method'=>'DELETE'])!!}
          {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
          {!!Form::close()!!}
          </td>
      </tbody>
      @endforeach
  </table>
    {!! link_to_route('generes.create',$title='Crear nuevo genero',null,
          $attributes=['class'=>'btn btn-primary']) !!}
</div>

