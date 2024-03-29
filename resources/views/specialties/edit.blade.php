@extends('layouts.panel')

@section('content')

    <div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar especialidad</h3>
            </div>
            <div class="col text-right">
            <a href="{{ url('specialties') }}" class="btn btn-sm btn-default">
              Cancelar y volver
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          @if($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          <li>{{$error}}</li>
          </div>
          @endforeach
          
           @endif
          <!-- Form -->
        <form action="{{ url('/specialties/'. $specialty->id )}}" method="post">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre de la especialidad</label>
                <input type="text" name="name" value="{{old('name', $specialty->name)}}"class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripcón</label>
                    <input type="text" name="description"value="{{old('description', $specialty->description)}}" class="form-control" >
                </div>
                      <button type="submit" class="btn btn-primary">
                          Guardar
                      </button>

            </form>
        </div>
      </div>
    
    </div>

</div>
@endsection
