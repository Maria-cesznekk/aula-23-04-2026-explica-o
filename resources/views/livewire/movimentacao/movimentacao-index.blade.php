<div class="mt-5">
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error')}}
    </div>
    @endif
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif
    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="pesquisar..." class="form-control">
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">produto</th>
                <th scope="col">tipo</th>

                <th scope="col">Quantidade movimentacao</th>
                <th scope="col">Data movimentacao</th>
                <th scope="col">Acoes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movimentacao as $m)
            <tr>
                <th scope="row">{{ $m->produto_id}}</th>
                <td>{{ $m->tipo}}</td>
                <td>{{ $m->quantidade}}</td>
                <td>{{ $m->data_movimentacao}}</td>
                <td>

                    <button wire:click='delete({{$m->id}}) ' class="btn btn-sm btn-danger">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>