<h1>Titulo dos cargos</h1>
<ul>
    @forelse ($cargos as $cargo)
        <li> {{$cargo->cargo}} </li>

    @empty
        <li> Não exitem Cargos cadastrados! </li>
    @endforelse

</ul>
