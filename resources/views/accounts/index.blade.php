<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Contas</title>
</head>
<body>
    <a href="{{ route('account.create') }}">Cadastrar</a>
    <h2>Listar as Contas</h2>

    @forelse($accounts as $key => $account)
        ID: {{$account->id}}<br>
        Nome: {{$account->nome}}<br>
        Valor: {{ 'R$ ' . number_format($account->valor, 2, ',', '.') }}<br>
        Vencimento: {{ \Carbon\Carbon::parse($account->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}<br>
        Criado em: {{ \Carbon\Carbon::parse($account->created_at)->tz('America/Sao_Paulo')->format('d/m/Y') }}<br><br>
        <a href="{{ route('account.show', ['account' => $account->id]) }}">Visualizar</a>
        <br>
        <a href="{{ route('account.edit', ['account' => $account->id]) }}">Editar</a>
        <br>
        
        <hr>
    @empty
        <span style="color: #f00">Nenhuma conta encontrada!</span>
    @endforelse


</body>
</html>