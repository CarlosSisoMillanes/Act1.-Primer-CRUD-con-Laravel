<form action="" method="post">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" name="name" required>
    <label for="role">Rol:</label>
    <select name="role" required>
        <option value="administrador">Administrador</option>
        <option value="usuario">Usuario</option>
    </select>
    <button type="submit">Iniciar Sesión</button>
</form>
<a href="{{ route('pokemons.index') }}"> Admin </a>