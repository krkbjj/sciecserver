@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="c   ol-md-8 col-md-offset-2">
                <table class="table table-inverse">
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Status</th>

                    <tr>
                        @forelse ($typeUsers as $u)

                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->descricao }}</td>
                            <td>{{ $u->status }}</td>

                    </tr>
                    @empty
                        <p>No type_users</p>
                    @endforelse

                    <table class="table">
            </div>
        </div>
    </div>
@endsection
