<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::orderByDesc('created_at')->get();
        //dd($accounts);
        return view('accounts.index', ['accounts' => $accounts]);
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(AccountRequest $request)
    {
        // Validation Form
        $request->validated();

        $account = Account::create($request->all());
        
        return redirect()->route('account.show', ['account' => $account->id])->with('success', 'Conta cadastrada com sucesso.');
    }

    public function show(Account $account)
    {
        //dd($account);
        return view('accounts.show', ['account' => $account]);
    }

    public function edit(Account $account)
    {
        return view('accounts.edit', ['account' => $account]);
    }

    public function update(AccountRequest $request, Account $account)
    {
        $request->validated();

        $account->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'vencimento' => $request->vencimento
        ]);

        return redirect()->route('account.show', ['account' => $account->id])->with('success', 'Conta atualizada com sucesso.');

    }

    public function destroy()
    {
        dd('Apagar');
    }
}
