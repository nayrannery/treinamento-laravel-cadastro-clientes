@extends('layouts.app')
@section('htmlheader_titulo', 'Clientes')
@section('links_adicionais')
  <link rel="stylesheet" href="{{asset('plugins/AdminLTE-3.2.0-rc/plugins/DataTable/datatables.min.css')}}">
@endsection
@section('scripts_adicionais')
  <script src="{{asset('plugins/AdminLTE-3.2.0-rc/plugins/DataTable/datatables.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/listar_cliente.js') }}"></script>
@endsection

@section('conteudo')
  <div class="card">
      @if(Session::has('mensagem'))
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{Session::get('mensagem')}}
        </div>
      @endif
    <div class="card-body">
      <div class="container">
          <h2>Listagem dos Produtos</h2><br>
              <a href="/clientes/create" class="btn btn-outline-info col-2"><b>Cadastro de Cliente</b></a>
              <br> <br> <br>
          <table id="cliente" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Sexo</th>
              <th>Cpf</th>
              <th>Data de Nascimento</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
          </table>
      </div>
    </div>
  </div> 
@endsection
