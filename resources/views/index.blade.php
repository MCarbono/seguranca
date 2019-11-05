@extends('template')

@section('content')
<form id="form" method="POST" action="{{url('login')}}">
    <div class="card text-center">
                <div class="card header">
                    <h2>Login</h2>
                </div>

                <div class="card-body">
                    <div class="form-group row ">
                        <div class="input-group col-sm-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="material-icons">person</i></span>
                            </div>  
                            <input required type="email" id="login" name="login" class="form-control" placeholder="Login (email)" value="">       
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-sm-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="material-icons">perm_identity</i></span>
                            </div>
                            <input required type="password" id="senha" name="senha"  class="form-control" placeholder="Senha" value="">
                        </div>
                    </div>
                        
                    <button type="submit" class="btn btn-success">Logar</button>
                </form>        

                       
                    </div>
                </div>

                <div class="card-footer text-right">
                    <a class="btn btn-primary " href="{{url('create')}}">Criar usuário</a>
                    <a class="btn btn-secondary" href="{{url('hackear/1')}}">Hackear</a>
                </div>
    </div>
@endsection