<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes da Conta</title>
</head>
<body>
    <a href="{{ route('account.index') }}">Listar</a>
    <h2>Detalhes da Conta</h2>
    @if(session('success'))
        <span style="color: #082">{{ session('success') }}</span>
    @endif

    <br>

    ID: {{ $account->id }}<br>
    Nome: {{ $account->nome }}<br>
    Valor: {{ 'R$ ' . number_format($account->valor, 2, ',', '.') }}<br>
    Vencimento: {{ \Carbon\Carbon::parse($account->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}<br>
    Criado em: {{ \Carbon\Carbon::parse($account->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>
    Modificado em: {{ \Carbon\Carbon::parse($account->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>

    <br>
    <a href="{{ route('account.edit', ['account' => $account->id]) }}">Editar</a>
</body>
</html>