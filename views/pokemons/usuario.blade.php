<!-- Vista del usuario que solo mostrará el contenido de la tabla -->
<div class="container">
    <h2>Listado de Pokémon</h2>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>