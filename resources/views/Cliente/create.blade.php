@extends('layouts.app')
@section('htmlheader_titulo', 'Adicionar Cliente')
@section('scripts_adicionais')
<script type="text/javascript" src=" {{asset('plugins/maskedinput/jquery.maskedinput.min.js')}}"></script>
<script  type="text/javascript" >
    $(document).ready( function($){
        $("#cpf_cliente").mask("999.999.99-99");
    });    



    $(document).ready( function($){
        $("#telefone_cliente").mask("(99) 9999-9999?9");         
        });
    
    

    
</script> 

@endsection

@section('conteudo')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <section class="content-header">
                    <div class="col-12">
                        <h2>Adicionar Cliente</h2>
                    </div>
                </section>
                @if(Session::has('mensagem')) 
                    <div class="alert alert-danger alert-dismissible">
                        <!-- data-dismiss - clas para fechar o button que abrir sem precisar de nada  -->
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <h5><i class="icon fas fa-ban"></i>Atenção!</h5>
                        {{Session::get('mensagem')}}
                    </div>
                @endif
                <div> <a href="/clientes" class="btn btn-outline-info float-right col-1" style="margin:0 20px 20px 0;"><b>Voltar</b></a></div>
                <div class="card-body">
                    <div class="container">
                        <form action="/clientes" method="POST">
                            @csrf
                            <div class="form-row"> 
                                <div class="form-group col-4">
                                    <label>Nome</label><br>
                                    <input type="text" name="nome_cliente" class="form-control @error('nome_cliente') is-invalid @enderror" required>
                                    @error('nome_cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-2">
                                    <label>CPF</label><br>
                                    <input type="text" id="cpf_cliente" name="cpf_cliente"  class="form-control @error('cpf_cliente') is-invalid @enderror" required>
                                    @error('cpf_cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-2">
                                    <label>Sexo</label>
                                    <select id="inputState" name="genero_cliente"  class="form-control @error('genero_cliente') is-invalid @enderror">                                        
                                        <option >Selecione...</option>
                                        <option value="M">Masculino</option> 
                                        <option value="F">Feminino</option>                                
                                      </select>                                   
                                       @error('genero_cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-3">
                                    <label>Data de Nascimento</label>
                                    <input type="date" name="dataNasc_cliente"  class="form-control @error('dataNasc_cliente') is-invalid @enderror" required>
                                    @error('dataNasc_cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-4">
                                    <label>Email</label>
                                    <input type="email" name="email_cliente"  class="form-control @error('email_cliente') is-invalid @enderror" required>
                                    @error('email_cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-2">
                                    <label>Telefone</label>
                                    <input type="text" id="telefone_cliente" name="telefone_cliente"  class="form-control @error('telefone_cliente') is-invalid @enderror" required>
                                    @error('telefone_cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>                       
                                <div>
                                    <button type="submit" class="btn btn-info float-right" style="margin:32px 0 0 50px;">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection