@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 55px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Clientes                    
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <script>
                            $( document ).ready(function() {
                                $(".alert").fadeTo(3500, 500).slideUp(500, function(){
                                $(".alert").slideUp(500);
                                });
                            });                   
                        </script>
                        @if(Session::has('mensagem_sucesso'))
                            <div  class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif
                    <table class="table">
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Comentário</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->comentario }}</td>
                                <td>
                                    
                                    {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline;']) !!}
                                    
                                    <button type="submit" class="btn btn-sm">Excluir  </button>
                                    
                                    {!! Form::close() !!}
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
