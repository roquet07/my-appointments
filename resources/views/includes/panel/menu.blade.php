
<h6 class="navbar-heading text-muted">
  @if(@auth()->user()->role == 'admin')
  Gestionar datos
  @elseif(@auth()->user()->role == 'doctor')
  Menú
  @endif

</h6>
<ul class="navbar-nav">
  @if(@auth()->user()->role == 'admin')

   <li class="nav-item">
    <a class="nav-link" href="/home">
      <i class="ni ni-tv-2 text-danger"></i> Dashboard
    </a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="/specialties">
      <i class="ni ni-planet text-blue"></i> Especialidades
    </a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="/doctors">
      <i class="ni ni-single-02 text-red"></i> Médicos
    </a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="/patients">
      <i class="ni ni-satisfied text-info"></i> Pacientes
    </a>
   </li>
 @elseif(@auth()->user()->role == 'doctor')
   <li class="nav-item">
      <a class="nav-link" href="/schedule">
        <i class="ni ni-calendar-grid-58 text-danger"></i> Gestionar horario
      </a>
    </li>
   <li class="nav-item">
      <a class="nav-link" href="/home">
        <i class="ni ni-bullet-list-67 text-blue"></i> Mis citas
      </a>
    </li>
   <li class="nav-item">
      <a class="nav-link" href="/patients">
        <i class="ni ni-single-02 text-info"></i> Mis pacientes
      </a>
    </li> 
 @else {{--patient--}}
    <li class="nav-item">
       <a class="nav-link" href="/patients">
         <i class="ni ni-tablet-button text-info"></i> Reservar Cita
       </a>
     </li> 
     <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="ni ni-bullet-list-67 text-blue"></i> MIS CITAS
        </a>
      </li>
    
 @endif





  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
      <i class="ni ni-key-25"></i> Cerrar sesión
    </a>
    <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
      @csrf
    </form>
  </li>
</ul>
@if(@auth()->user()->role == 'admin')
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="ni ni-sound-wave text-yellow"></i> Frecuencia de citas
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="ni ni-spaceship text-orange"></i> Médicos más activos
    </a>
  </li>
</ul>
@endif