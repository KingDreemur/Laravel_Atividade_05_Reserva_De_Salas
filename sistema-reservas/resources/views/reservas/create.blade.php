<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    <select name="sala_id" required>
        @foreach($salas as $sala)
            <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
        @endforeach
    </select>

    <input type="text" name="usuario" placeholder="Nome do usuário" required>
    <input type="date" name="data" required>
    <input type="time" name="hora" required>
    <button type="submit">Reservar</button>
</form>