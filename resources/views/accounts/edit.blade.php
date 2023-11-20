<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita a Conta</title>
</head>
<body>
    <a href="{{ route('account.index') }}">Listar</a><br>
    <a href="{{ route('account.show', ['account' => $account->id]) }}">Visualizar</a>
    <h2>Editar a Conta</h2>

    @if($errors->any())
        <span style="color: #f00">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </span>
        <br>
    @endif

    <form action="{{ route('account.update', ['account' => $account->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome:</label><br>
        <input type="text" name="nome" id="nome" placeholder="Digite aqui o nome da conta" value="{{ old('nome', $account->nome) }}"><br><br>
        <label for="">Valor:</label><br>
        <input type="text" name="valor" id="valor" placeholder="Digite aqui o valor da conta" value="{{ old('valor', $account->valor) }}"><br><br>
        <label for="">Vencimento:</label><br>
        <input type="date" name="vencimento" id="vencimento" value="{{ old('vencimento', $account->vencimento) }}"><br><br>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>