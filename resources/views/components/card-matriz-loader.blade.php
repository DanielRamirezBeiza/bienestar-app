<div class="card mx-2  @if(session('success'))bg-success @else bg-info @endif">
    <div class="card-header">
        Lector Matrices: Modulo para testear el cargador de datos desde archivos excel.
    </div>
    <div class="card-body">
       
    <form action="{{route('matriz.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="Importar Excel">Estado:
                        @if(session('success'))
                            Cargado
                        @else
                            Sin cargar
                        @endif
                  </label>
        <input type="file" class="form-control-file" name="import_file" />  
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
    </div>
    <div class="card-footer">
        <a href="{{route('matriz.index')}}" class="btn btn-warning">Visualizar Datos</a>
    </div>
</div>
    

         
