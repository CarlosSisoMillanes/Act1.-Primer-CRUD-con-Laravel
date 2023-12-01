<div class="container">
<h2>Listado de Pokémon</h2>
<a href="{{ route('pokemons.create') }}" class="btn btn-warning">Añadir Pokemon</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Tamaño</th>
            <th>Peso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pokemons as $pokemon)
            <tr>
                <td>{{ $pokemon->id }}</td>
                <td>{{ $pokemon->nombre }}</td>
                <td>{{ $pokemon->tipo }}</td>
                <td>{{ $pokemon->tamaño }}</td>
                <td>{{ $pokemon->peso }}</td>
                <td>
                    <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

