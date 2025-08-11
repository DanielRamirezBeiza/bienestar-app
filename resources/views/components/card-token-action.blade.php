<div class="card align-items-center bg-primary border border-dark rounded m-2">
      <div class="card-header p-1">
        <p class="text-light text-center">Departamento de Gestión de Personal</p>
      </div>
      <div class="card-body p-1">
        <a href={{route('token.show')}} class="btn btn-danger btn-sm">Estrellas: {{$total}}</a>
      </div>
      <div class="card-footer p-1">

        <form id="tokenInicial" action="{{route('token.store', ['token'=>'Inicial: Departamento de Gestión de Personal']) }}" method="POST" novalidate>
          @csrf
          <div class="form-group">    
            <button id="Test1" type="submit" class="btn btn-secondary mb-2 border btn-sm">Estrella</button>
            <small id="Test1" class="form-text">Presiona el boton para enviar una estrella</small>
          </div>
        </form>
      </div>
    </div>