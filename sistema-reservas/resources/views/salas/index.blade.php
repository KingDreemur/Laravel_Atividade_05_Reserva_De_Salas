<h1>Salas Cadastradas</h1>
<a href="{{ route('salas.create') }}">Nova Sala</a>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Capacidade</th>
    </tr>
    @foreach ($salas as $sala)
    <tr>
        <td>{{ $sala->nome }}</td>
        <td>{{ $sala->capacidade }}</td>
    </tr>
    @endforeach
</table>