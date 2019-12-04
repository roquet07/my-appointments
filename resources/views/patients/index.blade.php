@extends('layouts.panel')

@section('content')

    <div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Pacientes</h3>
            </div>
            <div class="col text-right">
            <a href="{{ url('patients/create') }}" class="btn btn-sm btn-success">
             Nuevo paciente
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          @if(session('notification'))
          <div class="alert alert-success" role="alert">
          {{ session('notification')}}
          </div>
          @endif
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">E-mail</th>
                <th scope="col">DNI</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $patient)
              <tr>
                  <th scope="row">
                    {{$patient->name}}
                  </th>
                  <td>
                      {{$patient->email}}
                  </td>
                  <td>
                      {{$patient->dni}}
                  </td>
                  <td>
                    <form action="{{url('/patients/'.$patient->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      
                     <a href="{{url('/patients/'.$patient->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                     <button onclick="return confirm('¿Seguro que desea eliminar este médico?');" 
                     class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                   </form>
                   
                  </td>
                </tr>   
              @endforeach
              
             
            </tbody>
          </table>
        </div>
        <div class="card-body">
            {{$patients->links()}}
          </div>
      </div>
        
  
    </div>
   
</div>
@endsection