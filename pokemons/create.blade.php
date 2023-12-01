<div class="container">
    <h2>Nuevo Pokémon</h2>
    
    <form method="POST" action="{{ route('pokemons.store') }}">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>

        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select name="tipo" class="form-control" required>
                <option value="acero">Acero</option>
                <option value="agua">Agua</option>
                <option value="bicho">Bicho</option>
                <option value="normal">Normal</option>
                <option value="lucha">Lucha</option>
                <option value="volador">Volador</option>
                <option value="veneno">Veneno</option>
                <option value="tierra">Tierra</option>
                <option value="roca">Roca</option>
                <option value="fantasma">Fantasma</option>
                <option value="fuego">Fuego</option>
                <option value="electrico">Eléctrico</option>
                <option value="psiquico">Psíquico</option>
                <option value="hielo">Hielo</option>
                <option value="dragon">Dragón</option>
                <option value="hada">Hada</option>
                <option value="siniestro">Siniestro</option>
                <option value="planta">Planta</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tamaño">Tamaño:</label>
            <select name="tamaño" class="form-control" required>
                <option value="pequeño">Pequeño</option>
                <option value="mediano">Mediano</option>
                <option value="grande">Grande</option>
            </select>
        </div>

        <div class="form-group">
            <label for="peso">Peso:</label>
            <input type="number" step="0.01" name="peso" class="form-control" value="{{ old('peso') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Pokémon</button>
    </form>
</div>