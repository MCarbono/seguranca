@extends('template')

@section('content')
<form id="form" method="POST" action="{{url('store')}}">

    <div class="card text-center">
                <div class="card header">
                    <h2>Cadastra usuário</h2>
                </div>

                <div class="card-body">

                <div class="form-group row ">
                        <div class="input-group col-sm-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="material-icons">person</i></span>
                            </div>  
                            <input  type="text" id="nome" name="nome" class="form-control" placeholder="Nome" >       
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="input-group col-sm-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="material-icons">person</i></span>
                            </div>  
                            <input  type="email" id="login" name="login" class="form-control" placeholder="Login" >       
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-sm-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="material-icons">perm_identity</i></span>
                            </div>
                            <input  type="password" id="senha" name="senha"  class="form-control" placeholder="Senha" >
                        </div>
                    </div>
                        
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>        

                       
                    </div>
                </div>

    
    </div>
@endsection